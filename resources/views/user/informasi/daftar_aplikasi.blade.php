@extends('layouts.main')

@section('title', 'Daftar Aplikasi')

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
<header>
    <h1>Daftar Aplikasi</h1>
</header>
<button class="back-button" onclick="window.history.back();">
    <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
</button>
    <div class="image-container">
        <img src="{{ asset('assets/img/daftar_aplikasi.png') }}" alt="Foto Daftar Aplikasi">
    </div>

    <div class="description">
        <p>Berikut adalah daftar nama-nama software yang Klinik IT sediakan untuk instalasi di komputer, netbook dan laptop anda. Anda bisa memilih masing-masing software yang terdapat di daftar software di bawah ini, atau anda juga bisa memilih software standar yang sudah kami sediakan agar anda tidak bingung untuk memilih nama-nama software untuk instalasi.</p>

        <ul>
            <li>Software Standar : </li>
            <ol>
                <li>7zip</li>
                <li>Adobe Reader</li>
                <li>Ccleaner</li>
                <li>Google Chrome</li>
                <li>Mozilla Firefox</li>
            </ol>
        </ul>
    </div>

    <!-- Tombol Mulai Chat dan Formulir -->
    <div class="button-container">
        <section class="center-button">
            <p>Mulai Chat :</p>
            <a href="/layanan/chat">
                <i class="fas fa-comments"></i> Click to Chat
            </a>
        </section>
        <section class="center-button">
            <p>Ingin Instalasi? Isi formulir di bawah ini :</p>
            <a href="/formulir/form_instalasi">
                <i class="fas fa-file-alt"></i> Klik untuk akses
            </a>
        </section>
    </div>
@endsection