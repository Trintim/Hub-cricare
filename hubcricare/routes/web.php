<?php

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

Route::resource('/home', SiteController::class);
Route::post('/send-email', [SiteController::class, 'sendEmail'])->name('site.contato');

