@extends('layouts.main')

@section('title', 'Biaya Service')

@section('content')
<header>
    <h1>Biaya Service</h1>
</header>

    <div class="image-container">
        <img src="{{ asset('assets/img/biaya_service.png') }}" alt="Foto Biaya Service">
    </div>

        <!-- Teks di bawah gambar dengan layout rata kiri -->
        <div class="description">
            <ul>
                <li>Berikut adalah Biaya Jasa Service Komputer, Netbook dan Laptop dll:</li>
                <ol>
                    <li>Biaya untuk install komputer (termasuk OS (WINDOWS / LINUX) & software standard) 150.000,-</li>
                    <li>Biaya untuk install netbook (termasuk OS (WINDOWS / LINUX) & software standard) 150.000,-</li>
                    <li>Biaya untuk install laptop (termasuk OS (WINDOWS / LINUX) & software standard) 150.000,-</li>
                </ol>
                <li>Berikut adalah biaya untuk Pengadaan dan Perakitan Komputer:</li>
                <ol>
                    <li>Budget sesuai yang Anda punya, biaya untuk pengadaan dan perakitan komputer (mulai dari casing+fan, power supply, dvd r / w, hardisk, motherboard, processor+fan, ram, vga card, lan card, keyboard, mouse, monitor, kabel power cpu dan monitor) 150.000,-/pc (sudah termasuk install os dan software).</li>
                </ol>
                <li>Biaya Pengecekan Komputer Kantor atau Warnet dan Game Online:</li>
                <ol>
                    <li>Instalasi atau pasang kabel jaringan (setting LAN) Mulai dari 150.000,-/titik</li>
                    <li>Install OS dan software Mulai dari 150.000,-/unit</li>
                    <li>Install software / game online / offline 25.000</li>
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