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

// Route untuk halaman Layanan Instalasi Jaringan
Route::get('layanan/instalasi_jaringan', [PageController::class, 'jaringan'])->name('jaringan');

// Route untuk halaman Layanan Perakitan Instalasi
Route::get('layanan/perakitan_instalasi', [PageController::class, 'perakitan'])->name('perakitan');

// Route untuk halaman Layanan Servis Komputer
Route::get('layanan/servis_komputer', [PageController::class, 'serviskomputer'])->name('serviskomputer');

// Route untuk halaman Layanan Servis Laptop/notebook
Route::get('layanan/servis_laptop', [PageController::class, 'servislaptop'])->name('servislaptop');

// Route untuk halaman Formulir Servis
Route::get('formulir/form_servis', [PageController::class, 'formservis'])->name('formservis');

// Route untuk halaman Formulir Instalasi
Route::get('formulir/form_instalasi', [PageController::class, 'forminstalasi'])->name('forminstalasi');

// Route untuk halaman Chat
Route::get('layanan/chat', [PageController::class, 'chat'])->name('chat');

// Route untuk halaman Edit Profil
Route::get('profil/edit_profil', [PageController::class, 'editprofil'])->name('editprofil');

// Route untuk halaman Keranjang
Route::get('user/cart', [PageController::class, 'cart'])->name('cart');

// Route untuk halaman Checkout
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');

// Route untuk halaman Waktu Service
Route::get('informasi/waktu', [PageController::class, 'waktuService'])->name('waktuService');

// Route untuk halaman Biaya Service
Route::get('informasi/biaya', [PageController::class, 'biayaService'])->name('biayaService');

// Route untuk halaman Daftar Aplikasi
Route::get('informasi/daftar_aplikasi', [PageController::class, 'daftarAplikasi'])->name('daftarAplikasi');

Route::get('admin/dashboard', [PageController::class, 'dashboardAdmin'])->name('dashboardAdmin');

Route::get('/toko/pesanan', [PageController::class, 'pesanan'])->name('toko.pesanan');

Route::get('/toko/stok', [PageController::class, 'stok'])->name('toko.stok');

Route::get('servis/instalasi-software', [PageController::class, 'instalasiSoftware'])->name('instalasi-software');
Route::get('servis/instalasi-jaringan', [PageController::class, 'instalasiJaringan'])->name('instalasi-jaringan');
Route::get('servis/service-komputer', [PageController::class, 'serviceKomputer'])->name('service-komputer');
Route::get('servis/service-laptop', [PageController::class, 'serviceLaptop'])->name('service-laptop');
Route::get('servis/perakitan-instalasi-komputer', [PageController::class, 'perakitanInstalasiKomputer'])->name('perakitan-instalasi-komputer');

Route::get('servis/daftar-chat', [PageController::class, 'daftarChat'])->name('daftar-chat');