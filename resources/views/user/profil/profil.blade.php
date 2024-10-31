@extends('layouts.main')

@section('title', 'Profil')

@section('content')

<style>
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }
    .header {
        background-color: #ffffff;
        padding: 10px 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }
    .header img {
        height: 50px;
    }
    .header nav {
        display: flex;
        gap: 20px;
    }
    .header nav a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }
    .header .profile-icon {
        font-size: 24px;
        color: #6a0dad;
    }
    .profile-section {
        text-align: center;
        padding: 20px;
        background-color: #e0f7fa;
    }
    .profile-section h1 {
        color: #6a0dad;
        font-size: 36px;
        margin: 0;
    }
    .profile-section .profile-pic {
        font-size: 100px;
        color: #6a0dad;
        margin: 20px 0;
    }
    .profile-section h2 {
        color: #6a0dad;
        font-size: 24px;
        margin: 0;
    }
    .profile-section p {
        color: #6a0dad;
        font-size: 18px;
        margin: 5px 0;
    }
    .profile-section .edit-button {
        background-color: #6a0dad;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        cursor: pointer;
        margin-top: 10px;
    }
    .profile-section .logout-button {
        background-color: #ad0d0d;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        cursor: pointer;
        margin-top: 10px;
    }
    .info-section {
        background-color: #d1c4e9;
        padding: 20px;
        display: flex;
        justify-content: space-around;
        border-radius: 20px;
        margin: 20px 20px;
        text-align: center;
    }
    .info-section div {
        flex: 1;
    }
    .info-section div p {
        margin: 5px 0;
        color: #6a0dad;
    }
    .info-section div span {
        color: #333;
        font-weight: bold;
    }
    .order-history {
        text-align: center;
        margin: 20px 0;
    }
    .order-history h2 {
        color: #6a0dad;
        font-size: 24px;
    }
    .order-history .order-items {
        display: flex;
        justify-content: space-around;
        margin: 20px 20px;
    }
    .order-history .order-item {
        background-color: #ffffff;
        border: 2px solid #6a0dad;
        border-radius: 20px;
        padding: 20px;
        width: 150px;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none;
    }
    .order-history .order-item:hover {
        background-color: #f3e5f5;
    }
    .order-history .order-item i {
        font-size: 40px;
        color: #6a0dad;
    }
    .order-history .order-item p {
        color: #6a0dad;
        font-size: 18px;
        margin: 10px 0 0 0;
    }
</style>
<header>
    <h1>Profile</h1>
</header>
{{-- <div class="header">
    <img src="https://storage.googleapis.com/a1aa/image/8lXuzrFZt3rUNp0gF2mexOYmUf1lGfrVK6YqgAjR5Xb2YPTnA.jpg" alt="Klinik IT Logo" width="100" height="50"/>
    <nav>
        <a href="#">BERANDA</a>
        <a href="#">LAYANAN</a>
        <a href="#">INFORMASI</a>
        <a href="#">TOKO</a>
        <a href="#">TENTANG KAMI</a>
    </nav>
    <i class="fas fa-user-circle profile-icon"></i>
</div> --}}

<div class="profile-section">
    <div class="profile-pic">
        <i class="fas fa-user-circle"></i>
    </div>
    <h2>Ahmad Ibnu</h2>
    <p>ahmadibnu123@gmail.com</p>
    <button class="edit-button" onclick="window.location.href='/profil/edit_profil'">Edit Profil</button>
    <button class="logout-button" onclick="window.location.href='{{ route('login.logout') }}'">Logout</button>
</div>

<div class="info-section">
    <div>
        <p>Alamat</p>
        <span>Banjarmasin, Jl. Sejahtera No. 13</span>
    </div>
    <div>
        <p>No. Hp</p>
        <span>+62 821 2345 4890</span>
    </div>
    <div>
        <p>Jenis Kelamin</p>
        <span>Laki - Laki</span>
    </div>
</div>

<div class="order-history">
    <h2>Riwayat Pemesanan</h2>
    <div class="order-items">
        <a class="order-item" href="#">
            <i class="fas fa-download"></i>
            <p>Instalasi</p>
        </a>
        <a class="order-item" href="#">
            <i class="fas fa-snowflake"></i>
            <p>Servis</p>
        </a>
        <a class="order-item" href="/profil/sperpart">
            <i class="fas fa-tools"></i>
            <p>Sperpart</p>
        </a>
    </div>
</div>

@endsection
