<?php

use App\Http\Controllers\BiodataController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::get('/get-started', [BiodataController::class, 'get_started'])->name('get-started')->middleware('isUser');
    Route::resource('biodata', BiodataController::class)->only('index', 'show')->middleware('isAdmin');
    Route::resource('biodata', BiodataController::class)->only('update')->middleware('isUser');
});
