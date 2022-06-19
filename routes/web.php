<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Main\DashboardController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\RegisterController;
use App\Models\Place;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::controller(PlaceController::class)->prefix('place')->name('place.')->middleware('auth')->group(function() {
    Route::get('loa-lepu', 'loaLepu')->name('loaLepu');
});

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




// Coba Chart
Route::get('chart', function() {
    return response()->view('chart');
});

Route::get('chart/real-time', function() {
    Place::create(['speed' => rand(30,70)]);

    $speeds = Place::latest()->take(30)->get()->sortBy('id');
    $labels = $speeds->pluck('id');
    $data = $speeds->pluck('speed');

    return response()->json(compact('labels', 'data'));
})->name('api.chart');
