@extends('layouts.main')

@section('title', 'Perakitan dan Instalasi Komputer')

@section('content')
    <header>
        <h1>Perakitan dan Instalasi Komputer</h1>
    </header>

    <div class="image-container">
        <img src="{{ asset('assets/img/perakitan_instalasi.jpg') }}" alt="Foto Instalasi Software">
    </div>

    <!-- Teks di bawah gambar dengan layout rata kiri -->
    <div class="description">
        <ul>
            <li>Perakitan Komputer:</li>
            <ol>
                <li>Persiapan: Mengumpulkan komponen seperti motherboard, prosesor, RAM, hard disk, dan power supply.</li>
                <li>Perakitan: Memasang komponen-komponen tersebut ke dalam casing dan menghubungkan kabel-kabel.</li>
                <li>Pengujian: Memastikan semua komponen terpasang dengan benar dan berfungsi.</li>
            </ol>
            <br>
            <li>Instalasi Komputer:</li>
            <ol>
                <li>Instalasi Sistem Operasi: Menginstal OS (seperti Windows atau Linux) dari media instalasi.</li>
                <li>Instalasi Driver: Menginstal driver perangkat keras untuk kinerja optimal.</li>
                <li>Instalasi Aplikasi: Menambahkan software yang dibutuhkan, seperti aplikasi dan antivirus.</li>
                <li>Konfigurasi: Menyesuaikan pengaturan sistem seperti jaringan dan akun pengguna.</li>
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