<?php

use App\Http\Controllers\AuthController;

Route::middleware(['auth', 'role:dokter'])->group(function () {
    Route::resource('dokter/jadwal', JadwalController::class);
});

Route::get('/', [AuthController::class, 'showLoginForm']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/dokter/dashboard', function () {
    return view('dokter.dashboard'); 
})->name('dokter.dashboard');

Route::get('/apoteker/dashboard', function () {
    return view('apoteker.dashboard');
})->name('apoteker.dashboard');
