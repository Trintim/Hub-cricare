<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use App\Mail\HubMail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});

Route::resource('/', SiteController::class);
Route::post('/send-email', [SiteController::class, 'sendEmail'])->name('site.contato');

Route::prefix('admin/')->name('admin.')->middleware("auth:web")->group(function () {

    Route::get('/', function () {
        return view('admin.home');
    })->name('home');

    Route::resource('/produtos', ProdutoController::class);

});