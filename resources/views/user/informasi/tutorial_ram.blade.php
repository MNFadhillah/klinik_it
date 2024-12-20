@extends('layouts.main')

@section('title', 'Tutorial Peningkatan RAM Laptop')

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
        <h1>Tutorial Peningkatan RAM Laptop</h1>
    </header>
    <button class="back-button" onclick="window.location.href='/informasi/isi_informasi';">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
    </button> 
    <div class="description">
        <p>Berikut adalah langkah-langkah untuk meningkatkan RAM pada laptop:</p>
        <ol>
            <li>Persiapan:
                <ul>
                    <li>Matikan laptop dan lepaskan baterai serta semua kabel yang terhubung.</li>
                    <li>Siapkan RAM baru yang kompatibel dengan laptop Anda.</li>
                </ul>
                <img src="{{ asset('assets/img/ram_step1.png') }}" alt="Persiapan" width="300">
            </li>
        </br>
            <li>Buka panel akses RAM:
                <ul>
                    <li>Temukan panel akses RAM di bagian bawah laptop.</li>
                    <li>Lepaskan sekrup yang menahan panel menggunakan obeng yang sesuai.</li>
                </ul>
                <img src="{{ asset('assets/img/ram_step2.png') }}" alt="Buka Panel" width="300">
            </li>
        </br>
            <li>Lepaskan RAM lama (jika akan diganti):
                <ul>
                    <li>Tekan klip pengunci di kedua sisi modul RAM.</li>
                    <li>RAM akan terangkat, tarik perlahan untuk melepaskannya.</li>
                </ul>
                <img src="{{ asset('assets/img/ram_step3.png') }}" alt="Lepas RAM Lama" width="300">
            </li>
        </br>
            <li>Pasang RAM baru:
                <ul>
                    <li>Sejajarkan takik pada RAM dengan slot.</li>
                    <li>Masukkan RAM dengan sudut 45 derajat, lalu tekan hingga terkunci.</li>
                </ul>
                <img src="{{ asset('assets/img/ram_step4.png') }}" alt="Pasang RAM Baru" width="300">
            </li>
            <li>Tutup kembali panel akses:
                <ul>
                    <li>Pasang kembali panel dan kencangkan sekrup.</li>
                </ul>
            </li>
        </br>
            <li>Pasang kembali baterai dan nyalakan laptop.</li>
        </br>
            <li>Verifikasi instalasi RAM:
                <ul>
                    <li>Buka "System Information" atau "About" di sistem operasi Anda.</li>
                    <li>Pastikan jumlah RAM yang terdeteksi sesuai.</li>
                </ul>
                <img src="{{ asset('assets/img/ram_step5.png') }}" alt="Verifikasi RAM" width="300">
            </li>
        </ol>
        <div class="warning">
            <p style="color: red;"><strong>Peringatan:</strong> Jika Anda tidak yakin dengan prosedur ini atau laptop Anda tidak memiliki panel akses RAM yang mudah dibuka, sebaiknya bawa laptop Anda ke teknisi profesional untuk menghindari kerusakan.</p>
        </div>
    </div>
    <div class="button-container">
        <section class="center-button">
            <p>Butuh bantuan lebih lanjut? Mulai Chat:</p>
            <a href="/layanan/chat"><i class="fas fa-comments"></i>Click to Chat</a>
        </section>
        <section class="center-button">
            <p >Ingin layanan upgrade RAM? Isi formulir di bawah ini:</p>
            <a href="/formulir/form_servis"><i class="fas fa-file-alt"></i>Klik untuk akses</a>
        </section>
    </div>
@endsection