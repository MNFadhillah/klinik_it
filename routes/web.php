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

// Authentication Routes
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/daftar', [DaftarController::class, 'daftar'])->name('daftar');

// Home Routes
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');

// Information Routes
Route::prefix('informasi')->name('informasi.')->group(function () {
    // Route::get('/', [InformasiController::class, 'informasi'])->name('index');
    Route::get('/waktu', [InformasiController::class, 'waktuService'])->name('waktuService');
    Route::get('/biaya', [InformasiController::class, 'biayaService'])->name('biayaService');
    Route::get('/daftar_aplikasi', [InformasiController::class, 'daftarAplikasi'])->name('daftarAplikasi');
    Route::get('/tutorial_layar', [InformasiController::class, 'tutorialLayar'])->name('tutorialLayar');
    Route::get('/tutorial_InstalasiOS', [InformasiController::class, 'tutorialInstalasiOS'])->name('tutorialInstalasiOS');
    Route::get('/tutorial_pemulihan', [InformasiController::class, 'tutorialPemulihan'])->name('tutorialPemulihan');
    Route::get('/tutorial_perbaikanKoneksi', [InformasiController::class, 'tutorialperbaikankoneksi'])->name('tutorialperbaikankoneksi');
    Route::get('/tutorial_ram', [InformasiController::class, 'tutorialRam'])->name('tutorialRam');
    Route::get('/tutorial_kipas', [InformasiController::class, 'tutorialKipas'])->name('tutorialKipas');
});


// Service Routes
Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::get('/instalasi_software', [LayananController::class, 'software'])->name('software');
    Route::get('/instalasi_jaringan', [LayananController::class, 'jaringan'])->name('jaringan');
    Route::get('/perakitan_instalasi', [LayananController::class, 'perakitan'])->name('perakitan');
    Route::get('/servis_komputer', [LayananController::class, 'servisKomputer'])->name('servisKomputer');
    Route::get('/servis_laptop', [LayananController::class, 'servisLaptop'])->name('servisLaptop');
    Route::get('/chat', [LayananController::class, 'chat'])->name('chat');
});



// Store Routes
Route::prefix('toko')->name('toko.')->group(function () {
    // Rute untuk menampilkan produk secara umum
    Route::get('/produk', [ProductController::class, 'index'])->name('produk.index');

    // Rute untuk keranjang
    Route::get('/cart', [ProductController::class, 'cart'])->name('cart');
    Route::post('/cart/add/{id}', [ProductController::class, 'addToCart'])->name('cart.add'); // Route untuk menambahkan ke keranjang
    Route::get('/checkout', [ProductController::class, 'checkout'])->name('checkout'); // Route untuk checkout

    // Rute untuk menampilkan halaman kategori
    Route::get('/', [KategoriController::class, 'index'])->name('index');

    // Rute untuk menampilkan produk berdasarkan kategori
    Route::get('/kategori/{id}', [ProductController::class, 'showByCategory'])->name('kategori.produk');
});


// Form Routes
Route::prefix('formulir')->name('formulir.')->group(function () {
    Route::get('/form_servis', [FormulirController::class, 'formservis'])->name('formservis');
    Route::post('/servis', [FormulirController::class, 'submitFormServis'])->name('submitFormServis');
    Route::get('/form-instalasi', [FormulirController::class, 'formInstalasi'])->name('formInstalasi');
    Route::post('/instalasi', [FormulirController::class, 'submitFormInstalasi'])->name('submitFormInstalasi');
});

// Profile Routes
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/edit_profil', [ProfilController::class, 'editProfil'])->name('edit');
    Route::post('/update', [ProfilController::class, 'updateProfil'])->name('update');
    Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');
});


// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
    
    // Rute untuk stok produk
    Route::get('/toko/stok', [AdminTokoController::class, 'stok'])->name('stok'); // Tampilkan daftar stok
    Route::get('/toko/pesanan', [AdminTokoController::class, 'pesanan'])->name('pesanan'); // Tampilkan daftar stok

    // Rute untuk menambah produk
    Route::get('/toko/create', [AdminTokoController::class, 'create'])->name('toko.create'); // Tampilkan form tambah produk
    Route::post('/toko/store', [AdminTokoController::class, 'store'])->name('toko.store'); // Proses tambah produk

    // Rute untuk mengedit produk
    Route::get('/toko/edit/{id}', [AdminTokoController::class, 'edit'])->name('toko.edit'); // Tampilkan form edit produk
    Route::put('/toko/update/{id}', [AdminTokoController::class, 'update'])->name('toko.update'); // Proses update produk

    // Rute untuk menghapus produk
    // Route::delete('/toko/destroy/{id}', [AdminTokoController::class, 'destroy'])->name('toko.destroy'); // Hapus produk
});




// Service Routes
Route::prefix('servis')->name('servis.')->group(function () {
    Route::get('/instalasi-software', [AdminServisController::class, 'instalasiSoftware'])->name('instalasi-software');
    Route::get('/instalasi-jaringan', [AdminServisController::class, 'instalasiJaringan'])->name('instalasi-jaringan');
    Route::get('/service-komputer', [AdminServisController::class, 'serviceKomputer'])->name('service-komputer');
    Route::get('/service-laptop', [AdminServisController::class, 'serviceLaptop'])->name('service-laptop');
    Route::get('/perakitan-instalasi-komputer', [AdminServisController::class, 'perakitanInstalasiKomputer'])->name('perakitan-instalasi-komputer');
    Route::get('/daftar-chat', [AdminServisController::class, 'daftarChat'])->name('daftar-chat');
});