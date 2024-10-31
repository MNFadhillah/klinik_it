<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AdminTokoController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\AdminServisController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\RegisterController;

// Authentication Routes
Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

// Middleware Routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboardAdmin', [LoginController::class, 'ShowDashboardAdmin'])->name('ShowDashboardAdmin');
});

Route::group(['middleware' => ['admin']], function(){
    Route::get('/toko/pesanan', [AdminTokoController::class, 'pesanan'])->name('pesanan');
    Route::get('/toko/stok', [AdminTokoController::class, 'stok'])->name('stok');
    Route::get('/dashboardAdmin', [LoginController::class, 'ShowDashboardAdmin'])->name('ShowDashboardAdmin');
});

// Home Routes
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');

// Information Routes
Route::prefix('informasi')->name('informasi.')->group(function () {
    Route::get('/waktu', [InformasiController::class, 'waktuService'])->name('waktuService');
    Route::get('/biaya', [InformasiController::class, 'biayaService'])->name('biayaService');
    Route::get('/daftar_aplikasi', [InformasiController::class, 'daftarAplikasi'])->name('daftarAplikasi');
    Route::get('/tutorial_layar', [InformasiController::class, 'tutorialLayar'])->name('tutorialLayar');
    Route::get('/tutorial_InstalasiOS', [InformasiController::class, 'tutorialInstalasiOS'])->name('tutorialInstalasiOS');
    Route::get('/tutorial_pemulihan', [InformasiController::class, 'tutorialPemulihan'])->name('tutorialPemulihan');
    Route::get('/tutorial_perbaikanKoneksi', [InformasiController::class, 'tutorialperbaikankoneksi'])->name('tutorialperbaikankoneksi');
    Route::get('/tutorial_ram', [InformasiController::class, 'tutorialRam'])->name('tutorialRam');
    Route::get('/tutorial_kipas', [InformasiController::class, 'tutorialKipas'])->name('tutorialKipas');
    Route::get('/isi_informasi', [InformasiController::class, 'isiInformasi'])->name('isiInformasi');
});

// Layanan Routes
Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::get('/instalasi_software', [LayananController::class, 'software'])->name('software');
    Route::get('/instalasi_jaringan', [LayananController::class, 'jaringan'])->name('jaringan');
    Route::get('/perakitan_instalasi', [LayananController::class, 'perakitan'])->name('perakitan');
    Route::get('/servis_komputer', [LayananController::class, 'servisKomputer'])->name('servisKomputer');
    Route::get('/servis_laptop', [LayananController::class, 'servisLaptop'])->name('servisLaptop');
    Route::get('/chat', [LayananController::class, 'chat'])->name('chat');
    Route::get('/jasa_instalasi', [LayananController::class, 'jasaInstalasi'])->name('jasaInstalasi');
    Route::get('/jasa_servis', [LayananController::class, 'jasaServis'])->name('jasaServis');
});

// Store Routes
Route::prefix('toko')->name('toko.')->group(function () {
    Route::get('/produk', [ProductController::class, 'index'])->name('produk.index');
    Route::get('/cart', [ProductController::class, 'cart'])->name('cart');
    Route::post('/cart/add/{id}', [ProductController::class, 'addToCart'])->name('cart.add');
    Route::get('/checkout', [ProductController::class, 'checkout'])->name('checkout');
    Route::get('/', [KategoriController::class, 'index'])->name('index');
    Route::get('/kategori/{id}', [ProductController::class, 'showByCategory'])->name('kategori.produk');
});

// Formulir Routes
Route::prefix('formulir')->name('formulir.')->group(function () {
    Route::get('/form_servis', [FormulirController::class, 'formservis'])->name('formservis');
    Route::post('/servis', [FormulirController::class, 'submitFormServis'])->name('submitFormServis');
    Route::get('/form_instalasi', [FormulirController::class, 'forminstalasi'])->name('forminstalasi');
    Route::post('/instalasi', [FormulirController::class, 'submitFormInstalasi'])->name('submitFormInstalasi');
    Route::get('/admin/servis/service-komputer', [AdminServisController::class, 'serviceKomputer'])->name('admin.servis.service-komputer');
});

// Profil Routes
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/edit_profil', [ProfilController::class, 'editProfil'])->name('edit');
    Route::post('/update', [ProfilController::class, 'updateProfil'])->name('update');
    Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');
    Route::get('/sperpart', [ProfilController::class, 'sperpart'])->name('sperpart');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/toko/stok', [AdminTokoController::class, 'stok'])->name('stok');
    Route::get('/toko/pesanan', [AdminTokoController::class, 'pesanan'])->name('pesanan');
    Route::get('/toko/create', [AdminTokoController::class, 'create'])->name('toko.create');
    Route::post('/toko/store', [AdminTokoController::class, 'store'])->name('toko.store');
    Route::get('/toko/edit/{id}', [AdminTokoController::class, 'edit'])->name('toko.edit');
    Route::put('/toko/update/{id}', [AdminTokoController::class, 'update'])->name('toko.update');
});
