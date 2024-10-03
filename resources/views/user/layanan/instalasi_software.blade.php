@extends('layouts.main')

@section('title', 'Instalasi Software')

@section('content')
<header>
    <h1>Instalasi Software</h1>
</header>

    <div class="image-container">
        <img src="{{ asset('assets/img/instalasi_software.jpg') }}" alt="Foto Instalasi Software">
    </div>

    <!-- Teks di bawah gambar dengan layout rata kiri -->
    <div class="description">
        <ul>
            <li>Instalasi software adalah proses menambahkan perangkat lunak ke sistem komputer agar bisa digunakan. Tahapannya meliputi:</li>
            <ol>
                <li>Persiapan: Unduh atau akses berkas instalasi, pastikan perangkat memenuhi persyaratan.</li>
                <li>Memulai Instalasi: Jalankan berkas instalasi dan berikan izin administrator jika diperlukan.</li>
                <li>Wizard Instalasi: Ikuti petunjuk untuk memilih opsi seperti lokasi penyimpanan dan persetujuan lisensi.</li>
                <li>Proses Instalasi: Sistem menyalin berkas dan menambahkan konfigurasi yang diperlukan.</li>
                <li>Selesai: Instalasi selesai, software siap digunakan; kadang perlu restart.</li>
            </ol>
            <li>Hasil akhir adalah software yang siap diuji dan digunakan sesuai fungsi.</li>
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