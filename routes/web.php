<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('instalasi_software'); // 'home' adalah nama view tanpa ekstensi .blade.php
// });

// Route untuk halaman Beranda
Route::get('/', [PageController::class, 'home'])->name('home');

// Route untuk halaman Layanan
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');

// Route untuk halaman Informasi
Route::get('/informasi', [PageController::class, 'informasi'])->name('informasi');

// Route untuk halaman Toko
Route::get('/toko', [PageController::class, 'toko'])->name('toko');

// Route untuk halaman Tentang Kami
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');

// Route untuk halaman Layanan Instalasi Software
Route::get('layanan/instalasi_software', [PageController::class, 'software'])->name('software');