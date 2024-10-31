@extends('layouts.main')

@section('title', 'Perakitan dan Instalasi Komputer')

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
        <h1>Jasa Servis Laptop/Notebook</h1>
    </header>
    <button class="back-button" onclick="window.location.href='/layanan/jasa_servis';">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
    </button> 
    <div class="image-container">
        <img src="../assets/img/servis_laptop.jpg" alt="Foto Instalasi Software">
    </div>

    <!-- Teks di bawah gambar dengan layout rata kiri -->
    <div class="description">
        <ul>
            <li>Servis laptop atau notebook mencakup perbaikan dan pemeliharaan perangkat untuk memastikan kinerjanya optimal. Layanan ini meliputi :</li>
            <ol>
                <li>Perbaikan Hardware: Mengganti atau memperbaiki komponen seperti layar, keyboard, baterai, atau motherboard.</p>
                <li>Perbaikan Software: Instalasi ulang OS, memperbaiki crash, virus, dan error sistem.</p>
                <li>Upgrade Komponen: Meningkatkan RAM, SSD, atau GPU.</p>
                <li>Pembersihan dan Pendinginan: Membersihkan kipas untuk mencegah overheat.</p>
                <li>Backup/Pemulihan Data: Memulihkan data yang hilang.</p>
                <li>Perbaikan Koneksi Jaringan: Mengatasi masalah Wi-Fi atau internet.</p>
            </ol>
            <li>Hasil akhir adalah laptop/notebook yang sudah diservis siap diuji dan digunakan sesuai fungsi.</li>
        </ul>
    </div>

    <!-- Tombol Mulai Chat dan Formulir -->
    <div class="button-container">
        <section class="center-button">
            <p>Mulai Chat :</p>
            <a href="/layanan/chat"><i class="fas fa-comments"></i>Click to Chat</a> <!-- Link ke WhatsApp -->
        </section>
        <section class="center-button">
            <p>Ingin Instalasi? Isi formulir di bawah ini :</p>
            <a href="/formulir/form_servis"><i class="fas fa-file-alt"></i>Klik untuk akses</a> <!-- Link ke halaman formulir -->
        </section>
    </div>

    @endsection
