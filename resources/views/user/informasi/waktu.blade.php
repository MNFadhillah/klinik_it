@extends('layouts.main')

@section('title', 'Waktu Service')

@section('content')
<header>
    <h1>Waktu Service</h1>
</header>

    <div class="image-container">
        <img src="{{ asset('assets/img/waktu_service.png') }}" alt="Foto Waktu Service">
    </div>

<!-- Teks di bawah gambar dengan layout rata kiri -->
<div class="description">
    <ul>
        <li>Berikut adalah waktu untuk service Komputer, Netbook dan Laptop:</li>
        <ol>
            <li>Senin – Jum’at Jam 09.00 – 20.00 Malam (Service panggilan, bisa dikerjakan ditempat customer atau dikerjakan di Rumah Komputer)</li>
            <li>Sabtu & Minggu Jam 09.00 Pagi – 21.00 Malam (Service panggilan, bisa dikerjakan ditempat customer atau dikerjakan di Rumah Komputer)</li>
        </ol>
        <li>Berikut adalah waktu untuk Install Ulang Windows dan Linux:</li>
        <ol>
            <li>Senin – Jum’at Jam 09.00 – 20.00 Malam (Install ulang bisa dikerjakan ditempat customer atau dikerjakan di Rumah Komputer)</li>
            <li>Sabtu & Minggu Jam 09.00 Pagi – 21.00 Malam (Install ulang bisa dikerjakan ditempat customer atau dikerjakan di Rumah Komputer)</li>
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