@extends('layouts.main')

@section('title', 'Produk')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">{{ $category->nama_kategori }}</h2>

    <!-- Tampilan Produk -->
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($products as $product)
            <div class="col mb-4">
                <a href="{{ route('toko.detail', $product->produk_id) }}" class="text-decoration-none text-dark">
                <div class="card h-100 border-0 shadow-sm product-card position-relative" style="transition: transform 0.3s ease; border-radius: 12px;">
                    
                    <!-- Badge "New" jika produk baru -->
                    @if($product->created_at->diffInDays(now()) < 7)
                        <span class="badge bg-success position-absolute top-0 start-0 m-2" style="padding: 8px; font-size: 12px; font-weight: 600; border-radius: 6px;">New</span>
                    @endif

                    @if($product->gambar)
                    <img src="{{ asset('storage/' . $product->gambar) }}" 
                         class="product-image img-fluid rounded-top" 
                         style="height: auto; object-fit: cover;" 
                         alt="{{ $product->nama_produk }}">
                @else
                    <img src="{{ asset('storage/no-image.png') }}" 
                         class="product-image img-fluid rounded-top" 
                         style="height: auto; object-fit: cover;" 
                         alt="No Image">
                @endif
                
                                    
                    
                    <!-- Informasi Produk -->
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center font-weight-bold">{{ $product->nama_produk }}</h5>
                        <p class="card-text text-muted text-center" style="font-size: 14px;">{{ Str::limit($product->deskripsi, 60) }}</p>
                        <p class="card-text text-center fw-bold mb-1" style="color: #E3743D; font-size: 18px;">Rp{{ number_format($product->harga, 0, ',', '.') }}</p>
                        <p class="card-text text-center">
                            <small class="text-muted">
                                Stok: {{ $product->stok }}
                            </small>
                        </p>

                        <div class="d-flex justify-content-around align-items-center mt-auto gap-2">
                            <form action="#" method="POST" class="mb-0">
                                @csrf
                                <button type="submit" class="btn btn-outline-warning btn-sm d-flex align-items-center">
                                    <i class="fa fa-cart-plus me-1"></i> Keranjang
                                </button>
                            </form>
                            <a href="#" class="btn btn-outline-success btn-sm d-flex align-items-center">
                                <i class="fa fa-shopping-bag me-1"></i> Beli
                            </a>
                            <a href="/layanan/chat" class="btn btn-outline-primary btn-sm d-flex align-items-center">
                                <i class="fa fa-comments me-1"></i> Chat
                            </a>
                        </div>
                        
                        
                    </div>
                </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
