@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Kategori Produk</h2>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($categories as $category)
            <div class="col">
                <div class="card h-100 d-flex flex-column border-0 shadow-sm" style="transition: transform 0.3s; border-radius: 12px;">
                    <img src="{{ asset('img/' . $category->gambar) }}" class="card-img-top" alt="{{ $category->nama_kategori }}" style="object-fit: cover; height: 200px; width: 100%; border-radius: 12px 12px 0 0;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center fw-bold">{{ $category->nama_kategori }}</h5>
                        <p class="card-text flex-grow-1 text-muted" style="font-size: 14px;">{{ Str::limit($category->deskripsi, 100) }}</p>
                        <div class="mt-auto">
                            <a href="{{ route('toko.produk', $category->id) }}" class="btn btn-primary w-100" style="transition: background-color 0.3s;">
                                Lihat Produk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

</style>
@endsection
