@extends('layouts.main')

@section('title', 'Tutorial Ganti Layar Laptop')

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
        <h1>Tutorial Perbaikan Koneksi Jaringan</h1>
    </header>
    <button class="back-button" onclick="window.location.href='/informasi/isi_informasi';">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
    </button> 
    <div class="description">
        <p>Berikut adalah langkah-langkah untuk perbaikan Koneksi Jaringan pada laptop:</p>
        <ol>
            <li>Buka Setting</li>
            <img src="{{ asset('assets/img/koneksi_step1.jpg') }}" alt="Membuka Setting" width="300">
            <br><br>

            <li>Pilih network and internet</li>
            <img src="{{ asset('assets/img/koneksi_step2.jpg') }}" alt="Memilih network&internet" width="300">
            <br><br>

            <li>Klik Advanced network settings</li>
            <img src="{{ asset('assets/img/koneksi_step3.jpg') }}" alt="Klik dvanced network setting" width="300">
            <br><br>

            <li>Kemudian klik Network Reset</li>
            <img src="{{ asset('assets/img/koneksi_step4.jpg') }}" alt="Membuka Network Reset" width="300">
            <br><br>

            <li>Klik Reset Now dan yes</li>
            <img src="{{ asset('assets/img/koneksi_step5.jpg') }}" alt="Klik reset now" width="300">
            <br><br>

            <li>Maka jaringan sudah bisa dipakai kembali</li>
            <img src="{{ asset('assets/img/koneksi_step6.jpg') }}" alt="Sudah bisa dipakai" width="300">
            <br><br>
        </ol>
        <div class="warning">
            <p style="color: red;"><strong>Peringatan:</strong> Jika Anda tidak yakin dengan prosedur ini, sebaiknya bawa laptop Anda ke teknisi profesional untuk menghindari kerusakan lebih lanjut.</p>
        </div>
    </div>

    <div class="button-container">
        <section class="center-button">
            <p>Butuh bantuan lebih lanjut? Mulai Chat:</p>
            <a href="/layanan/chat"><i class="fas fa-comments"></i>Click to Chat</a>
        </section>
        <section class="center-button">
            <p>Ingin layanan penggantian layar? Isi formulir di bawah ini:</p>
            <a href="/formulir/form_servis"><i class="fas fa-file-alt"></i>Klik untuk akses</a>
        </section>
    </div>
@endsection
