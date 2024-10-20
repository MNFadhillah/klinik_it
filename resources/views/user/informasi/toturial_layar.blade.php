@extends('layouts.main')

@section('title', 'Perakitan dan Instalasi Komputer')

@section('content')
    <header>
        <h1>Toturial Perbaikan Ganti Layar Laptop</h1>
    </header>

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
