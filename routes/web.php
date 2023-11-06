<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);

Route::middleware(['guest'])->group(function () {
    // Login controller
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'index')->middleware('guest');
        Route::get('/auth', 'index')->name('login')->middleware('guest');
        Route::post('/auth', 'authenticate')->name('login.verif')->middleware('guest');
        Route::post('/logout', 'logout')->name('logout');
    });

    // Register Controller
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'index')->name('register')->middleware('guest');
        Route::post('/register', 'store')->name('register.store')->middleware('guest');
    });
});

// 
Route::resource('/books', BookController::class);

// Admin - Pustakawan Middleware
Route::middleware(['auth', 'role:admin,pustakawan'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/admin-books', AdminBookController::class);
});