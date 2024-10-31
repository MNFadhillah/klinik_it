@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($categories as $category)
        <div class="col">
            <div class="card h-100 d-flex flex-column">
                <img src="{{ asset('img/' . $category->gambar) }}" class="card-img-top" 
     alt="{{ $category->nama_kategori }}" 
     style="object-fit: cover; height: 200px; width: 100%; border-radius: 8px;">

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $category->nama_kategori }}</h5>
                    <p class="card-text flex-grow-1">{{ $category->deskripsi }}</p>
                    <div class="mt-auto">
                        <a href="{{ route('toko.kategori.produk', $category->id) }}" class="btn btn-primary w-100">Lihat Produk</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection