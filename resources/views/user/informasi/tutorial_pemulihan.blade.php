@extends('layouts.main')

@section('title', 'Tutorial Ganti Layar Laptop')

@section('content')
    <header>
        <h1>Tutorial Pemulihan Data</h1>
    </header>

    <div class="description">
        <p>Berikut adalah langkah-langkah untuk memulihkan data pada laptop:</p>
        <ol>
            <li>Buka Recycle Bin</li>
            <img src="{{ asset('assets/img/pemulihan_step1.jpg') }}" alt="Membuka Bezel" width="300">
            <br><br>

            <li>Klik kanan pada file yang ingin dipulihkan dan klik "Restore"</li>
            <img src="{{ asset('assets/img/pemulihan_step2.jpg') }}" alt="Membuka Bezel" width="300">
            <br><br>

            <li>Jika sudah, cek di folder tempat Anda menyimpan file tersebut. File yang dipulihkan akan ada di sana.</li>
            <img src="{{ asset('assets/img/pemulihan_step3.jpg') }}" alt="Membuka Bezel" width="300">
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
<<<<<<< HEAD
@endsection
=======

@endsection

>>>>>>> 5bead0eb6c584ea257abe832ddb322e21994dada
