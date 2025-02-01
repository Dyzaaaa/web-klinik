<?php

use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'showLoginForm']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/dokter/dashboard', function () {
    return view('dokter.dashboard'); 
})->name('dokter.dashboard');

Route::get('/dokter/jadwal', function () {
    return view('dokter.jadwal'); 
})->name('dokter.jadwal');

Route::get('/dokter/datapasien', function () {
    return view('dokter.datapasien'); 
})->name('dokter.datapasien');

Route::get('/dokter/datakunjungan', function () {
    return view('dokter.datakunjungan'); 
})->name('dokter.datakunjungan');

Route::get('/apoteker/dashboard', function () {
    return view('apoteker.dashboard');
})->name('apoteker.dashboard');
