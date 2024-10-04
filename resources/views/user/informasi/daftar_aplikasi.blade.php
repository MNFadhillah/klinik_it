@extends('layouts.main')

@section('title', 'Daftar Aplikasi')

@section('content')
<header>
    <h1>Daftar Aplikasi</h1>
</header>

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