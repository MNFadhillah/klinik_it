@extends('layouts.mainAdmin')

@section('content')
<div class="container">
    <h2>Daftar Pesanan</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>Pengiriman</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Isi dengan data pesanan -->
        </tbody>
    </table>
</div>
@endsection