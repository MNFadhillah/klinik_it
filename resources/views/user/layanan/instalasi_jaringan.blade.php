@extends('layouts.main')

@section('title', 'Instalasi Jaringan')

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
        <h1>Instalasi Jaringan</h1>
    </header>
    <button class="back-button" onclick="window.location.href='/layanan/jasa_instalasi';">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
    </button> 
    <div class="image-container">
        <img src="{{ asset('assets/img/instalasi_jaringan.jpg') }}" alt="Foto Instalasi Jaringan">
    </div>

    <!-- Teks di bawah gambar dengan layout rata kiri -->
    <div class="description">
        <ul>
            <li>Berikut adalah deskripsi singkat instalasi jaringan dalam bentuk poin :</li>
            <ol>
                <li>Sumber di Server: Software di-host di server pusat, diakses oleh perangkat klien melalui jaringan.</li>
                <li>Instalasi Terpusat: Instalasi dilakukan secara terpusat dari server, menghemat waktu dan tenaga.</li>
                <li>Instalasi Otomatis: Sering menggunakan metode otomatis seperti silent installation tanpa campur tangan pengguna.</li>
                <li>Konsistensi Software: Memastikan semua perangkat menggunakan versi software yang sama, menjaga konsistensi.</li>
                <li>Keamanan dan Izin: Memerlukan izin administrator, memastikan instalasi yang aman dan terkontrol.</li>
                <li>Pembaruan Mudah: Mempermudah distribusi pembaruan ke semua perangkat secara bersamaan.</li>
                <li>Efisiensi Skala: Cocok untuk organisasi besar, mengelola instalasi software di banyak perangkat sekaligus.</li>
            </ol>
            <li>Hasil akhir adalah jaringan yang siap diuji dan digunakan sesuai fungsi.</li>
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