<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminTokoController;
use App\Http\Controllers\AdminServisController;

// Halaman Login
Route::get('/login', [LoginController::class, 'login'])->name('login');

// Halaman daftar
Route::get('/daftar', [DaftarController::class, 'daftar'])->name('daftar');

// Halaman Utama
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');

// Information Routes
Route::prefix('informasi')->name('informasi.')->group(function () {
    Route::get('/', [InformasiController::class, 'informasi'])->name('index');
    Route::get('/waktu', [InformasiController::class, 'waktuService'])->name('waktuService');
    Route::get('/biaya', [InformasiController::class, 'biayaService'])->name('biayaService');
    Route::get('/daftar-aplikasi', [InformasiController::class, 'daftarAplikasi'])->name('daftarAplikasi');
    Route::get('/toturial-layar', [InformasiController::class, 'toturialLayar'])->name('toturialLayar');
    Route::get('/toturial-instalasi-os', [InformasiController::class, 'toturialInstalasiOS'])->name('toturialInstalasiOS');
    Route::get('/informasi/toturial_ram', [InformasiController::class, 'toturialRam'])->name('toturialRam');
    Route::get('/informasi/toturial_kipas', [InformasiController::class, 'toturialKipas'])->name('toturialKipas');
});

// // Halaman Utama
// Route::get('/', [PageController::class, 'home'])->name('home');

// // Halaman Informasi
// Route::prefix('informasi')->group(function () {
//     Route::get('/', [PageController::class, 'informasi'])->name('informasi');
//     Route::get('/waktu', [PageController::class, 'waktuService'])->name('waktuService');
//     Route::get('/biaya', [PageController::class, 'biayaService'])->name('biayaService');
//     Route::get('/daftar_aplikasi', [PageController::class, 'daftarAplikasi'])->name('daftarAplikasi');
// });

// Halaman Layanan
// Route::prefix('layanan')->group(function () {
//     Route::get('/', [PageController::class, 'layanan'])->name('layanan');
//     Route::get('/instalasi_software', [PageController::class, 'software'])->name('software');
//     Route::get('/instalasi_jaringan', [PageController::class, 'jaringan'])->name('jaringan');
//     Route::get('/perakitan_instalasi', [PageController::class, 'perakitan'])->name('perakitan');
//     Route::get('/servis_komputer', [PageController::class, 'serviskomputer'])->name('serviskomputer');
//     Route::get('/servis_laptop', [PageController::class, 'servislaptop'])->name('servislaptop');
//     Route::get('/chat', [PageController::class, 'chat'])->name('chat');
// });

Route::get('/layanan/instalasi_software', [LayananController::class, 'software'])->name('software');
Route::get('/layanan/instalasi_jaringan', [LayananController::class, 'jaringan'])->name('jaringan');
Route::get('/layanan/perakitan_instalasi', [LayananController::class, 'perakitan'])->name('perakitan');
Route::get('/layanan/servis_komputer', [LayananController::class, 'servisKomputer'])->name('servisKomputer');
Route::get('/layanan/servis_laptop', [LayananController::class, 'servisLaptop'])->name('servisLaptop');
Route::get('/layanan/chat', [LayananController::class, 'chat'])->name('chat');

// Halaman Toko
Route::get('/toko', [TokoController::class, 'toko'])->name('toko');
Route::get('/cart', [TokoController::class, 'cart'])->name('cart');
Route::get('/checkout', [TokoController::class, 'checkout'])->name('checkout');
Route::post('/add-to-cart', [TokoController::class, 'addToCart'])->name('addToCart');

// Halaman Formulir
// Route::prefix('formulir')->group(function () {
//     Route::get('/form_servis', [PageController::class, 'formservis'])->name('formservis');
//     Route::get('/form_instalasi', [PageController::class, 'forminstalasi'])->name('forminstalasi');
// });

Route::get('/formulir/form_servis', [FormulirController::class, 'formServis'])->name('formServis');
Route::post('/formulir/servis', [FormulirController::class, 'submitFormServis'])->name('submitFormServis');
Route::get('/formulir/form_instalasi', [FormulirController::class, 'formInstalasi'])->name('formInstalasi');
Route::post('/formulir/instalasi', [FormulirController::class, 'submitFormInstalasi'])->name('submitFormInstalasi');

// Halaman User
Route::prefix('user')->group(function () {
    Route::get('/cart', [PageController::class, 'cart'])->name('cart');
    Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');
});

// Halaman Profil
// Route::prefix('profil')->group(function () {
//     Route::get('/edit_profil', [PageController::class, 'editprofil'])->name('editprofil');
// });
Route::get('/profil/edit', [ProfilController::class, 'editProfil'])->name('editProfil');
Route::post('/profil/update', [ProfilController::class, 'updateProfil'])->name('updateProfil');

// Halaman Admin
// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', [PageController::class, 'dashboardAdmin'])->name('dashboardAdmin');
// });
Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('adminDashboard');
Route::get('/toko/pesanan', [AdminTokoController::class, 'pesanan'])->name('admin.pesanan');
Route::get('/toko/stok', [AdminTokoController::class, 'stok'])->name('admin.stok');

// Halaman Servis
Route::prefix('servis')->group(function () {
    Route::get('/instalasi-software', [AdminServisController::class, 'instalasiSoftware'])->name('instalasi-software');
    Route::get('/instalasi-jaringan', [AdminServisController::class, 'instalasiJaringan'])->name('instalasi-jaringan');
    Route::get('/service-komputer', [AdminServisController::class, 'serviceKomputer'])->name('service-komputer');
    Route::get('/service-laptop', [AdminServisController::class, 'serviceLaptop'])->name('service-laptop');
    Route::get('/perakitan-instalasi-komputer', [AdminServisController:: class, 'perakitanInstalasiKomputer'])->name('perakitan-instalasi-komputer');
    Route::get('/daftar-chat', [AdminServisController::class, 'daftarChat'])->name('daftar-chat');
});
