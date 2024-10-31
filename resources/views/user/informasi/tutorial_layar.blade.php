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
        <h1>Tutorial Penggantian Layar Laptop</h1>
    </header>
    <button class="back-button" onclick="window.location.href='/informasi/isi_informasi';">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
    </button>    
    <div class="description">
        <p>Berikut adalah langkah-langkah untuk mengganti layar pada laptop:</p>
        <ol>
            <li>Matikan laptop dan lepaskan baterai serta semua kabel yang terhubung.</li>
            <li>Buka bezel layar:
                <ul>
                    <li>Gunakan alat pembuka plastik untuk melepaskan bezel secara perlahan.</li>
                    <li>Mulai dari sudut dan bekerja mengelilingi layar.</li>
                </ul>
                <img src="{{ asset('assets/img/layar_step2.jpeg') }}" alt="Membuka Bezel" width="300">
            </li>
        </br>
            <li>Lepaskan kabel video:
                <ul>
                    <li>Angkat layar sedikit dan temukan kabel video di belakang.</li>
                    <li>Lepaskan kabel dengan hati-hati.</li>
                </ul>
                <img src="{{ asset('assets/img/layar_step3.jpeg') }}" alt="Melepas Kabel Video" width="300">
            </li>
        </br>
            <li>Angkat layar lama dan pasang layar baru:
                <ul>
                    <li>Pastikan layar baru kompatibel dengan laptop Anda.</li>
                </ul>
                <img src="{{ asset('assets/img/layar_step4.jpeg') }}" alt="Memasang Layar Baru" width="300">
            </li>
            <li>Sambungkan kembali kabel video ke layar baru.</li>
        </br>
            <li>Pasang kembali bezel layar, mulai dari bagian atas dan tekan perlahan ke sekeliling.</li>
        </br>
            <li>Pasang kembali baterai dan nyalakan laptop untuk menguji layar baru.</li>
            <img src="{{ asset('assets/img/layar_step5.jpeg') }}" alt="Nyala" width="300">
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