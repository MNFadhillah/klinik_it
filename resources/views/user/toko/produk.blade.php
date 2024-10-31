@extends('layouts.main')

@section('content')
<style>
    .back-button {
        position: relative; /* Menggunakan relative agar mengikuti tata letak elemen */
        display: inline-flex; /* Inline agar bisa bersebelahan dengan elemen lain jika perlu */
        margin-top: 10px; /* Jarak vertikal dari elemen sebelumnya */
        /* margin-bottom: 20px; Jarak ke elemen berikutnya */
        margin-left: 20px; /* Menggeser tombol sedikit ke kanan */
        background-color: #A1BECA;
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        color: white;
        z-index: 10;
    }
    
    .back-button img {
        width: 20px;
        height: 20px;
        pointer-events: none;
    }
    
    .back-button:hover {
        background-color: #CDC1FF;
    }
</style>
@if (Auth::check())
    <button class="back-button" onclick="window.history.back();">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
    </button>
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

    <!-- Flash Messages -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Daftar produk -->
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @forelse($produk as $product)
        <div class="col mb-4">
            <div class="card h-100 border-0 shadow-sm product-card">
                <!-- Badge untuk produk baru -->
                @if($product->created_at->diffInDays(now()) < 7)
                    <div class="position-absolute top-0 end-0 m-2">
                        <span class="badge bg-success">New</span>
                    </div>
                @endif

                <!-- Gambar Produk -->
                <div class="position-relative">
                    @if($product->gambar)
                        <img src="{{ asset('storage/img/' . $product->gambar) }}" 
                             class="card-img-top" 
                             alt="{{ $product->nama_produk }}" 
                             style="height: 200px; object-fit: cover;">
                    @else
                        <img src="{{ asset('img/no-image.png') }}" 
                             class="card-img-top" 
                             alt="No Image" 
                             style="height: 200px; object-fit: cover;">
                    @endif
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
@else
    <script>
        window.location.href = "{{ route('login') }}";
    </script>
@endif
@endsection