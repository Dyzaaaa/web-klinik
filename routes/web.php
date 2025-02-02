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

Route::get('/dokter/rekammedis', function () {
    return view('dokter.rekammedis'); 
})->name('dokter.rekammedis');

Route::get('/dokter/resep', function () {
    return view('dokter.resep'); 
})->name('dokter.resep');

Route::get('/apoteker/dashboard', function () {
    return view('apoteker.dashboard');
})->name('apoteker.dashboard');

Route::get('/apoteker/antrean', function () {
    return view('apoteker.antrean');
})->name('apoteker.antrean');

Route::get('/apoteker/inventaris', function () {
    return view('apoteker.inventaris');
})->name('apoteker.inventaris');

Route::get('/apoteker/kasir', function () {
    return view('apoteker.kasir');
})->name('apoteker.kasir');

Route::get('/apoteker/keuangan', function () {
    return view('apoteker.keuangan');
})->name('apoteker.keuangan');

Route::get('/apoteker/checklistresep', function () {
    return view('apoteker.checklistresep');
})->name('apoteker.checklistresep');

Route::get('/apoteker/tambahantrean', function () {
    return view('apoteker.tambahantrean');
})->name('apoteker.tambahantrean');

Route::get('/apoteker/pembelian', function () {
    return view('apoteker.pembelian');
})->name('apoteker.pembelian');

Route::get('/apoteker/pemesanan', function () {
    return view('apoteker.pemesanan');
})->name('apoteker.pemesanan');

Route::get('/apoteker/transaksi', function () {
    return view('apoteker.transaksi');
})->name('apoteker.transaksi');

Route::get('/apoteker/tabelpemasukan', function () {
    return view('apoteker.tabelpemasukan');
})->name('apoteker.tabelpemasukan');

Route::get('/apoteker/tabelpengeluaran', function () {
    return view('apoteker.tabelpengeluaran');
})->name('apoteker.tabelpengeluaran');

Route::get('/apoteker/tambahpemasukan', function () {
    return view('apoteker.tambahpemasukan');
})->name('apoteker.tambahpemasukan');

Route::get('/apoteker/tambahpengeluaran', function () {
    return view('apoteker.tambahpengeluaran');
})->name('apoteker.tambahpengeluaran');