<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminTokoController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\AdminServisController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ProdukSpesifikasiController;

// Home Routes
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');

// Authentication Routes
Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

// Middleware Routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/dashboardAdmin', [LoginController::class, 'ShowDashboardAdmin'])->name('ShowDashboardAdmin');

    // Admin Routes
    Route::prefix('admin')->name('admin.')->group(function () {
        // Dashboard
        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');

        // Manajemen Toko (Stok, Pesanan)
        Route::get('/toko/stok', [AdminTokoController::class, 'stok'])->name('toko.stok');
        Route::get('/toko/pesanan', [AdminTokoController::class, 'pesanan'])->name('toko.pesanan');

        // Tambah dan Edit Produk
        Route::get('/toko/create', [AdminTokoController::class, 'create'])->name('toko.create');
        Route::post('/toko/store', [AdminTokoController::class, 'store'])->name('toko.store');
        Route::get('/toko/edit/{produk_id}', [AdminTokoController::class, 'edit'])->name('toko.edit');
        Route::put('/toko/update/{produk_id}', [AdminTokoController::class, 'update'])->name('toko.update');

         // Hapus Produk
        Route::delete('/toko/delete/{id}', [AdminTokoController::class, 'destroy'])->name('toko.delete');
        
        Route::get('toko/{produk}', [ProdukSpesifikasiController::class, 'index'])->name('admin.spesifikasi.index'); // Menampilkan spesifikasi produk
        Route::post('toko/spesifikasi/store', [ProdukSpesifikasiController::class, 'store'])->name('toko.spesifikasi.store'); // Menambahkan spesifikasi baru
        // Halaman Edit Spesifikasi
        Route::get('toko/spesifikasi/edit/{id}', [ProdukSpesifikasiController::class, 'edit'])->name('admin.toko.spesifikasi.edit');

        // Update Spesifikasi
        Route::put('toko/spesifikasi/update/{id}', [ProdukSpesifikasiController::class, 'update'])->name('admin.toko.spesifikasi.update');


        
    });
    
    
    // Route khusus untuk halaman Toko
    Route::prefix('toko')->name('toko.')->group(function () {
        // Produk
        Route::get('/produk', [ProductController::class, 'index'])->name('produk.index');
        Route::get('/kategori/{id}', [KategoriController::class, 'showProducts'])->name('produk');
        Route::get('/', [KategoriController::class, 'index'])->name('index'); // Menampilkan semua kategori

        Route::post('/cart/add/{produkId}', [CartController::class, 'addToCart'])->name('cart.add');
        Route::get('/cart/{produkId}', [CartController::class, 'viewCart'])->name('cart.view');
        Route::delete('/cart/remove/{produkId}', [CartController::class, 'removeFromCart'])->name('cart.remove');

       
        // Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout.index');
        // Route::post('/checkout/{produkId}', [CheckoutController::class, 'checkout'])->name('checkout');
        // Route::get('/checkout/direct/{produkId}', [CheckoutController::class, 'checkoutDirect'])->name('checkout.direct');
        // Route::get('/checkout/success/{orderId}', [CheckoutController::class, 'success'])->name('checkout.success');
        // Checkout dari keranjang belanja
        Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout.index');

        // Checkout pembelian langsung
        Route::get('/checkout/direct/{produkId}', [CheckoutController::class, 'checkoutDirect'])->name('checkout.direct');

        // Halaman sukses setelah checkout
        Route::get('/checkout/success/{orderId}', [CheckoutController::class, 'success'])->name('checkout.success');


        // Route::post('/checkout/{id}', [ProductController::class, 'checkout'])->name('toko.checkout');
        Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('detail');
        // Chat
        Route::get('/chat', [LayananController::class, 'chat'])->name('chat');

        // Rute untuk membuat pesanan (checkout)
        Route::post('/checkout/create', [OrderController::class, 'createOrder'])->name('order.create');

        // Rute untuk halaman pembayaran
        Route::get('/checkout/{orderId}/payment', [OrderController::class, 'payment'])->name('payment');

        // Rute untuk memproses pembayaran
        Route::post('/checkout/payment/process', [OrderController::class, 'processPayment'])->name('payment.process');

        // Rute untuk halaman sukses setelah pembayaran
        Route::get('/order/{orderId}/success', [OrderController::class, 'success'])->name('order.success');


    });
});



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

