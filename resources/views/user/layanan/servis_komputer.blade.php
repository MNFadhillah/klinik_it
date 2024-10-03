@extends('layouts.main')

@section('title', 'Perakitan dan Instalasi Komputer')

@section('content')
    <header>
        <h1>Jasa Servis Komputer</h1>
    </header>

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
            <a href="/formulir/form_instalasi">
                <i class="fas fa-file-alt"></i> Klik untuk akses
            </a>
        </section>
    </div>

    @endsection
