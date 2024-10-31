@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <!-- Search Bar dan Filter -->
    <div class="row mb-4">
        <div class="col-md-8">
            <form action="{{ route('toko.index') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Cari produk..." value="{{ request('search') }}">
                <select name="kategori" class="form-select me-2" style="width: 200px;">
                    <option value="">Semua Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('kategori') == $category->id ? 'selected' : '' }}>
                            {{ $category->nama_kategori }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
        <div class="col-md-4 d-flex justify-content-end">
            <a href="{{ route('toko.cart') }}" class="btn btn-primary me-2 rounded-pill">
                <i class="fa fa-shopping-cart"></i> Keranjang
                @if(session('cart_count'))
                    <span class="badge bg-danger rounded-pill">{{ session('cart_count') }}</span>
                @endif
            </a>
            <a href="{{ route('toko.checkout') }}" class="btn btn-success rounded-pill">
                <i class="fa fa-money"></i> Pesanan
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

                <div class="card-body d-flex flex-column">
                    <!-- Kategori -->
                    <span class="badge bg-secondary mb-2">{{ $product->kategori->nama_kategori }}</span>
                    
                    <!-- Nama Produk -->
                    <h5 class="card-title fw-bold text-truncate">{{ $product->nama_produk }}</h5>
                    
                    <!-- Deskripsi -->
                    <p class="card-text flex-grow-1" style="font-size: 0.9rem;">
                        {{ \Str::limit($product->deskripsi, 100) }}
                    </p>
                    
                    <!-- Harga dan Stok -->
                    <div class="mb-2">
                        <p class="card-text text-success fw-bold fs-5 mb-1">
                            Rp {{ number_format($product->harga, 0, ',', '.') }}
                        </p>
                        <p class="card-text mb-0">
                            <small class="text-muted">
                                Stok: {{ $product->stok > 0 ? $product->stok : 'Habis' }}
                            </small>
                        </p>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="d-flex justify-content-between mt-auto">
                        <a href="{{ route('layanan.chat', $product->id) }}" 
                           class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-comments"></i> Chat
                        </a>
                        
                        <form action="{{ route('cart.add', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" 
                                    class="btn btn-outline-warning btn-sm" 
                                    {{ $product->stok < 1 ? 'disabled' : '' }}>
                                <i class="fa fa-shopping-cart"></i> Cart
                            </button>
                        </form>
                        
                        <a href="{{ route('toko.buy', $product->id) }}" 
                           class="btn btn-outline-success btn-sm"
                           {{ $product->stok < 1 ? 'disabled' : '' }}>
                            <i class="fas fa-credit-card"></i> Buy
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center">
            <h3>Tidak ada produk yang tersedia</h3>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $produk->links() }}
    </div>
</div>

@push('styles')
<style>
    .product-card {
        transition: transform 0.2s;
    }
    .product-card:hover {
        transform: translateY(-5px);
    }
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }
</style>
@endpush

@push('scripts')
<script>
    // Auto-hide flash messages
    setTimeout(function() {
        $('.alert').fadeOut('slow');
    }, 3000);
</script>
@endpush
@endsection