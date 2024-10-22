@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-end">
            <a href="toko/cart" class="btn btn-primary me-2 rounded-pill mr-2">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Keranjang 
                <span class="badge bg-danger rounded-pill">1</span>
            </a>
            <a href="toko/checkout" class="btn btn-success rounded-pill">
                <i class="fa fa-money" aria-hidden="true"></i> Lihat Pesanan
            </a>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4">
        <!-- Product 1 -->
        <div class="col">
            <div class="card h-100 border-0 shadow">
                <img src="../img/1.jpg" class="card-img-top" alt="Xiaomi RedmiBook 15">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Xiaomi RedmiBook 15</h5>
                    <p class="card-text flex-grow-1">Laptop Xiaomi RedmiBook 15 intel i3-1115G4 Ram 8GB + SSD 256GB W10 - Non Bundling</p>
                    <p class="card-text text-success fw-bold fs-5">Rp. 4.919.000</p>
                    <p class="card-text"><small class="text-muted">Stok: 10</small></p>
                    <div class="d-flex justify-content-between mt-auto">
                        <a href="/layanan/chat" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-comments"></i> Chat
                        </a>
                        <a href="#" class="btn btn-outline-warning btn-sm">
                            <i class="fas fa-shopping-cart"></i> Cart
                        </a>
                        <a href="/checkout" class="btn btn-outline-success btn-sm">
                            <i class="fas fa-credit-card"></i> Buy
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="col">
            <div class="card h-100 border-0 shadow">
                <img src="../img/2.jpg" class="card-img-top" alt="Lenovo Thinkpad X220">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Lenovo Thinkpad X220</h5>
                    <p class="card-text flex-grow-1">Lenovo Thinkpad Laptop X220 Core i5 Ram 4/8GB HDD 320/256GB Murah - X220I I3 GEN2</p>
                    <p class="card-text text-success fw-bold fs-5">Rp. 1.390.000</p>
                    <p class="card-text"><small class="text-muted">Stok: 11</small></p>
                    <div class="d-flex justify-content-between mt-auto">
                        <a href="/layanan/chat" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-comments"></i> Chat
                        </a>
                        <a href="#" class="btn btn-outline-warning btn-sm">
                            <i class="fas fa-shopping-cart"></i> Cart
                        </a>
                        <a href="/checkout" class="btn btn-outline-success btn-sm">
                            <i class="fas fa-credit-card"></i> Buy
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="col">
            <div class="card h-100 border-0 shadow">
                <img src="../img/3.jpg" class="card-img-top" alt="Apple Macbook Air M1">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Apple Macbook Air M1</h5>
                    <p class="card-text flex-grow-1">(RESMI IBOX) Apple MacBook Air M1 Chip 2020 256GB 8GB Garansi resmi - silver</p>
                    <p class="card-text text-success fw-bold fs-5">Rp. 12.449.000</p>
                    <p class="card-text"><small class="text-muted">Stok: 7</small></p>
                    <div class="d-flex justify-content-between mt-auto">
                        <a href="/layanan/chat" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-comments"></i> Chat
                        </a>
                        <a href="#" class="btn btn-outline-warning btn-sm">
                            <i class="fas fa-shopping-cart"></i> Cart
                        </a>
                        <a href="/checkout" class="btn btn-outline-success btn-sm">
                            <i class="fas fa-credit-card"></i> Buy
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="col">
            <div class="card h-100 border-0 shadow">
                <img src="../img/4.jpg" class="card-img-top" alt="ASUS VivoBook 14">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">ASUS VivoBook 14</h5>
                    <p class="card-text flex-grow-1">ASUS VivoBook 14 M415DAO - RYZEN 3-3250U 8GB SSD 512GB 14" FHD W10 OHS</p>
                    <p class="card-text text-success fw-bold fs-5">Rp. 5.999.000</p>
                    <p class="card-text"><small class="text-muted">Stok: 5</small></p>
                    <div class="d-flex justify-content-between mt-auto">
                        <a href="/layanan/chat" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-comments"></i> Chat
                        </a>
                        <a href="#" class="btn btn-outline-warning btn-sm">
                            <i class="fas fa-shopping-cart"></i> Cart
                        </a>
                        <a href="/checkout" class="btn btn-outline-success btn-sm">
                            <i class="fas fa-credit-card"></i> Buy
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection