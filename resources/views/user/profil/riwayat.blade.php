@extends('layouts.main')

@section('title', 'Riwayat Sparepart')

@section('content')

<style>
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }
    .order-history {
        text-align: center;
        margin: 20px 0;
    }
    .order-history h2 {
        color: #6a0dad;
        font-size: 24px;
    }
    .order-section {
        background-color: #ffffff;
        border: 2px solid #6a0dad;
        border-radius: 20px;
        padding: 20px;
        margin: 10px;
        text-align: left;
    }
    .order-section h3 {
        color: #6a0dad;
        font-size: 20px;
    }
    .order-item {
        margin: 10px 0;
        padding: 10px;
        border: 1px solid #6a0dad;
        border-radius: 10px;
    }
</style>

<div class="order-history">
    <h2>Riwayat Sparepart</h2>

    <div class="order-section">
        <h3>Sedang Diproses</h3>
        <div class="order-item">
            <p>Nama Sparepart: Filter Udara</p>
            <p>Tanggal Pemesanan: 10 Oktober 2023</p>
            <p>Status: Sedang Diproses</p>
        </div>
        <div class="order-item">
            <p>Nama Sparepart: Oli Mesin</p>
            <p>Tanggal Pemesanan: 11 Oktober 2023</p>
            <p>Status: Sedang Diproses</p>
        </div>
    </div>

    <div class="order-section">
        <h3>Telah Selesai</h3>
        <div class="order-item">
            <p>Nama Sparepart: Busi</p>
            <p>Tanggal Pemesanan: 5 Oktober 2023</p>
            <p>Status: Telah Selesai</p>
        </div>
        <div class="order-item">
            <p>Nama Sparepart: Kampas Rem</p>
            <p>Tanggal Pemesanan: 8 Oktober 2023</p>
            <p>Status: Telah Selesai</p>
        </div>
    </div>
</div>

@endsection