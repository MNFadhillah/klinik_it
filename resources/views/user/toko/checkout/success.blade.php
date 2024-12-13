<!-- resources/views/checkout/success.blade.php -->

@extends('layouts.main')

@section('title', 'Pesanan Sukses')

@section('content')
<div class="container mt-4">
    <h2>Pesanan Berhasil</h2>
    <p>Pesanan Anda dengan ID: #{{ $order->id }} telah berhasil dibuat.</p>
    <p>Total Harga: Rp{{ number_format($order->total_harga, 0, ',', '.') }}</p>
    <p>Status Pesanan: {{ ucfirst($order->status) }}</p>

    <h3>Detail Pesanan</h3>
    <ul>
        @foreach($order->details as $detail)
            <li>{{ $detail->product->nama_produk }} x{{ $detail->quantity }} - Rp{{ number_format($detail->harga * $detail->quantity, 0, ',', '.') }}</li>
        @endforeach
    </ul>
    <a href="/toko" class="btn btn-primary">Kembali ke Toko</a>
</div>
@endsection
