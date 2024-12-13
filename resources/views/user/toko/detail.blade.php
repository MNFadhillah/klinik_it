@extends('layouts.main')

@section('content')
<div class="container mt-4">
    @if(session('success'))
        <div class="alert-container">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    
    @if(session('error'))
        <div class="alert-container">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    
    @if ($errors->any())
        <div class="alert-container">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    
    <div class="d-flex justify-content-between align-items-center mb-3">
        <!-- Breadcrumb -->
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">{{ $produk->kategori->nama_kategori ?? 'Kategori tidak tersedia' }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $produk->nama_produk }}</li>
        </ol>
    
        <!-- Kolom Pencarian dan Logo Keranjang -->
        <div class="d-flex align-items-center">
            <!-- Kolom Pencarian -->
            <form action="#" method="GET" class="me-3">
                <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="Cari produk..." aria-label="Cari produk">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
    
            <!-- Logo Keranjang -->
            <a href="{{ route('toko.cart.view', $produk->produk_id) }}" class="btn btn-outline-secondary position-relative">
                <i class="fa fa-shopping-cart"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{ session('cart') ? count(session('cart')) : 0 }}
                </span> 
            </a>
        </div>
    </div>
    

    <div class="row">
        <!-- Detail Produk -->
        <div class="col-md-4">
            <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}" class="img-fluid rounded shadow">
        </div>

        <div class="col-md-8">
            <h1 class="h3">{{ $produk->nama_produk }}</h1>
            <div>
                <span class="text-danger h4">Rp{{ number_format($produk->harga, 0, ',', '.') }}</span>
            </div>      
            <div class="mt-4">
                <p class="text-muted">Stok: {{ $produk->stok }}</p>

                <div class="mt-3 text-muted small">
                    @if($produk->stok > 0)
                        <span class="text-success">
                            <i class="fa fa-check-circle me-2"></i> Stok Tersedia ({{ $produk->stok }} item)
                        </span>
                    @else
                        <span class="text-danger">
                            <i class="fa fa-times-circle me-2"></i> Stok Habis
                        </span>
                    @endif
                    <i class="fa fa-truck ms-3 me-2"></i> Pengiriman tersedia
                    <i class="fa fa-shield-alt ms-3 me-2"></i> Garansi produk
                </div>
                
                <div class="row g-3 mt-4">
                    <!-- Tombol untuk mengarahkan ke checkout -->
                    <div class="col-12 mb-3">
                        <a href="{{ route('toko.checkout.direct', $produk->produk_id) }}" class="btn btn-primary w-100">
                            <i class="fa fa-shopping-bag me-2"></i> Beli Sekarang
                        </a>
                    </div>
                    
                    
                    <div class="col-12">
                        <div class="row g-3">
                            <div class="col-md-6 mb-3">
                                <form action="{{ route('toko.cart.add', $produk->produk_id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-warning text-white rounded shadow-sm w-100">
                                        <i class="fa fa-cart-plus me-2"></i> Masukkan Keranjang
                                    </button>
                                </form>                                
                            </div>
                            <div class="col-md-6 mb-3">
                                <a href="layanan/chat" class="btn btn-success text-white rounded shadow-sm w-100">
                                    <i class="fa fa-comments me-2"></i> Chat Penjual
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h4>Spesifikasi Produk</h4>
        @if($produk->spesifikasi)
            <p><strong>Detail:</strong> {{ $produk->spesifikasi->isi_spesifikasi }}</p>
        @else
            <p><strong>Detail:</strong> Spesifikasi tidak tersedia</p>
        @endif
    </div>
</div>

<script>
    const quantityInput = document.getElementById('quantityInput');
    const decreaseButton = document.getElementById('decreaseQuantity');
    const increaseButton = document.getElementById('increaseQuantity');

    decreaseButton.addEventListener('click', function() {
        let currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
        }
    });

    increaseButton.addEventListener('click', function() {
        let currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity < quantityInput.max) {
            quantityInput.value = currentQuantity + 1;
        }
    });
    // Menutup alert secara otomatis setelah 5 detik
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 5000);

    // Panggil toggleForm() jika ada error
    @if($errors->any())
        toggleForm();
    @endif
</script>
@endsection
