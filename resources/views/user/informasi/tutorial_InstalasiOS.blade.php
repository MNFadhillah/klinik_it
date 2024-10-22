@extends('layouts.main')

@section('title', 'Tutorial Instalasi OS pada Laptop')

@section('content')
    <header>
        <h1>Tutorial Instalasi OS pada Laptop</h1>
    </header>

    <div class="description">
        <p>Berikut adalah langkah-langkah untuk melakukan instalasi OS pada laptop:</p>
        <ol>
            <li>Persiapan:
                <ul>
                    <li>Backup data penting Anda.</li>
                    <li>Siapkan media instalasi (USB bootable atau DVD instalasi OS).</li>
                </ul>
                <img src="{{ asset('assets/img/os_step1.jpeg') }}" alt="Persiapan" width="300">
            </li>
        </br>
            <li>Atur boot order di BIOS:
                <ul>
                    <li>Nyalakan laptop dan masuk ke BIOS (biasanya dengan menekan F2, F10, atau Del saat booting).</li>
                    <li>Pilih flashdiks lalu enter.</li>
                </ul>
                <img src="{{ asset('assets/img/os_step2.jpeg') }}" alt="Atur BIOS" width="300">
            </li>
        </br>
            <li>Penyesuaian:
                <ul>
                    <li>Pilih bahasa indonesia.</li>
                    <li>Klik next.</li>
                </ul>
                <img src="{{ asset('assets/img/os_step3.jpeg') }}" alt="Penyesuaian" width="300">
            </li>
        </br>
            <li>Mulai instalasi:
                <ul>
                    <li>Klik Install now.</li>
                </ul>
                <img src="{{ asset('assets/img/os_step4.jpeg') }}" alt="Mulai Instalasi" width="300">
            </li>
        </br>
            <li>Ikuti wizard instalasi:
                <ul>
                    <li>klik kolom centang.</li>
                    <li>klik next.</li>
                    <li>pilih costume.</li>
                </ul>
                <img src="{{ asset('assets/img/os_step5.jpeg') }}" alt="Wizard" width="300">
                <img src="{{ asset('assets/img/os_step6.jpeg') }}" alt="costum" width="300">
            </li>
        </br>
            <li>Partisi hard drive (jika diperlukan):
                <ul>
                    <li>Hapus partisi lama dan buat partisi baru sesuai kebutuhan.</li>
                    <li>Pilih partisi untuk instalasi OS.</li>
                </ul>
                <img src="{{ asset('assets/img/os_step7.jpeg') }}" alt="partisi" width="300">
            </li>
        </br>
            <li>Tunggu proses instalasi selesai:
                <ul>
                    <li>Laptop akan restart beberapa kali selama proses ini.</li>
                </ul>
                <img src="{{ asset('assets/img/os_step8.jpeg') }}" alt="Proses Instalasi" width="300">
            </li>
        </br>
            <li>Selesaikan pengaturan awal:
                <ul>
                    <li>Buat akun pengguna.</li>
                    <li>Atur preferensi privasi dan lainnya.</li>
                </ul>
                <img src="{{ asset('assets/img/os_step9.jpeg') }}" alt="pengaturanAwal" width="300">
            </li>
        </br>
            <li>Windows Siap digunakan .</li>
            <img src="{{ asset('assets/img/os_step10.jpeg') }}" alt="Selesai" width="300">
        </ol>
        <div class="warning">
            <p style="color: red;"><strong>Peringatan:</strong> Instalasi OS akan menghapus semua data di partisi yang dipilih. Pastikan untuk mem-backup data penting sebelum memulai proses ini.</p>
        </div>
    </div>

    <div class="button-container">
        <section class="center-button">
            <p>Butuh bantuan lebih lanjut? Mulai Chat:</p>
            <a href="/layanan/chat"><i class="fas fa-comments "></i>Click to Chat</a>
        </section>
        <section class="center-button">
            <p>Ingin layanan instalasi OS? Isi formulir di bawah ini:</p>
            <a href="/formulir/form_servis"><i class="fas fa-file-alt"></i>Klik untuk akses</a>
        </section>
    </div>
@endsection