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
        <h1>Jasa Servis Komputer</h1>
    </header>
    <button class="back-button" onclick="window.location.href='/layanan/jasa_servis';">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
    </button> 
    <div class="image-container">
        <img src="../assets/img/servis_komputer.jpg" alt="Foto Instalasi Software">
    </div>

    <!-- Teks di bawah gambar dengan layout rata kiri -->
    <div class="description">
        <ul>
            <li>Servis komputer adalah proses perawatan, perbaikan, atau peningkatan sistem komputer untuk memastikan kinerjanya tetap optimal. Ini mencakup :</li>
            <ol>
                <li>Pembersihan Fisik: Menghilangkan debu dan kotoran dari komponen hardware untuk mencegah overheating.</p>
                <li>Pemeriksaan dan Penggantian Komponen: Memeriksa hardware seperti hard drive, RAM, atau motherboard, dan mengganti jika ada yang rusak.</p>
                <li>Perbaikan Software: Memperbaiki masalah pada sistem operasi, virus, atau program yang menyebabkan kinerja lambat atau error.</p>
                <li>Pembaruan: Meng-upgrade software atau hardware untuk meningkatkan performa.</p>
                <li>Optimasi Sistem: Melakukan defragmentasi, pembersihan file sampah, dan optimasi setting agar komputer berjalan lebih lancar.</p>
            </ol>
            <li>Hasil akhir adalah komputer yang sudah diservis siap diuji dan digunakan sesuai fungsi.</li>
            <br>
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
            <a href="/formulir/form_servis">
                <i class="fas fa-file-alt"></i> Klik untuk akses
            </a>
        </section>
    </div>

    @endsection
