<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Main\DashboardController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

// Route Login
Route::controller(LoginController::class)->middleware('guest')->name('user.')->group(function() {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'cekLogin')->name('cekLogin');
    Route::post('logout', 'logout')->name('logout')->withoutMiddleware('guest')->middleware('auth');
});

// Route Register
Route::controller(RegisterController::class)->middleware('guest')->name('user.')->group(function() {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'cekRegister')->name('cekRegister');
});
