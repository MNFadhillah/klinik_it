@extends('layouts.main')

@section('title', 'Tutorial Membersihkan Kipas Laptop')

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
        <h1>Tutorial Membersihkan Kipas Laptop untuk Mencegah Overheat</h1>
    </header>
    <button class="back-button" onclick="window.location.href='/informasi/isi_informasi';">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
    </button> 
    <div class="description">
        <p>Berikut adalah langkah-langkah untuk membersihkan kipas laptop:</p>
        <ol>
            <li>Persiapan:
                <ul>
                    <li>Matikan laptop serta semua kabel yang terhubung.</li>
                    <li>Siapkan obeng, kuas lembut, dan kaleng udara bertekanan.</li>
                </ul>
            </li>
        </br>
            <li>Buka panel akses:
                <ul>
                    <li>Temukan panel akses di bagian bawah laptop yang menutupi kipas.</li>
                    <li>Lepaskan sekrup yang menahan panel menggunakan obeng yang sesuai.</li>
                </ul>
                <img src="{{ asset('assets/img/fan_step2.png') }}" alt="Buka Panel" width="300">
            </li>
        </br>
            <li>Lokasi kipas:
                <ul>
                    <li>Lepaskan baterai</li>
                    <li>Identifikasi lokasi kipas di dalam laptop.</li>
                    <li>Perhatikan arah aliran udara kipas.</li>
                </ul>
                <img src="{{ asset('assets/img/fan_step3.png') }}" alt="Lokasi Kipas" width="300">
            </li>
        </br>
            <li>Lepas Kipas:
                <ul>
                    <li>Lepaskan sekrup yang menahan kipas</li>
                    <li>Lepaskan kabel kipas dari laptop.</li>
                </ul>
                <img src="{{ asset('assets/img/fan_step4.png') }}" alt="Lokasi Kipas" width="300">
                <img src="{{ asset('assets/img/fan_step5.png') }}" alt="Lokasi Kipas" width="300">
            </li>
        </br>
            <li>Bersihkan kipas:
                <ul>
                    <li>Gunakan kuas lembut untuk membersihkan debu dari bilah kipas.</li>
                    <li>Bersihkan juga ventilasi udara di sekitar kipas.</li>
                    <li>Pastikan tidak ada sumbatan pada jalur udara.</li>
                </ul>
                <img src="{{ asset('assets/img/fan_step6.png') }}" alt="Lokasi Kipas" width="300">
            </li>
        </br>
            <li>Tutup kembali panel akses:
                <ul>
                    <li>Pasang kembali panel dan kencangkan sekrup.</li>
                </ul>
            </li>
        </br>
            <li>Uji hasil:
                <ul>
                    <li>Pasang kembali baterai dan nyalakan laptop.</li>
                    <li>Perhatikan apakah ada perubahan pada suara kipas dan suhu laptop.</li>
                </ul>
            </li>
        </ol>
        <div class="warning">
            <p style="color: red;"><strong>Peringatan:</strong> Jika Anda tidak yakin dengan prosedur ini atau laptop Anda memiliki desain yang rumit, sebaiknya bawa laptop Anda ke teknisi profesional untuk menghindari kerusakan.</p>
        </div>
    </div>
    <div class="button-container">
        <section class="center-button">
            <p>Butuh bantuan lebih lanjut? Mulai Chat:</p>
            <a href="/layanan/chat"><i class="fas fa-comments"></i>Click to Chat</a>
        </section>
        <section class="center-button">
            <p >Ingin layanan perawatan laptop? Isi formulir di bawah ini:</p>
            <a href="/formulir/form_servis"><i class="fas fa-file-alt"></i>Klik untuk akses</a>
        </section>
    </div>
@endsection