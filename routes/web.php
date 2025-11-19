<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// halaman utama
Route::get('/', function () {
    return view('welcome');
});

// tampilkan halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');

// proses login
Route::post('/login', [AuthController::class, 'login'])->name('login');

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// (opsional) halaman register dan lupa password
// Route::get('/register', function() {
//     return 'Halaman register belum dibuat';
// })->name('register');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

Route::get('/forgot-password', function() {
    return 'Halaman reset password belum dibuat';
})->name('password.request');
