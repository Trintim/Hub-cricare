<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ProductCategorieController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
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

Route::prefix('admin/')->name('admin.')->middleware("auth:web")->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('home');

    Route::resource('produtos', ProdutoController::class);
    Route::resource('funcionarios', FuncionarioController::class);
    Route::resource('productCategories', ProductCategorieController::class);
    Route::get('produtos/{id}/state', [ProdutoController::class, 'stateUpdate'])->name('produtos.state');
    Route::resource('user', UserController::class);
});

Route::get('/', [SiteController::class, 'index'])->name('site');
Route::get('produtos', [SiteController::class, 'produtos'])->name('site.produtos');
Route::get('/produtos/product/{id}', [SiteController::class, 'product'])->name('site.product');
Route::post('send-email', [SiteController::class, 'sendEmail'])->name('site.contato');