<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Klinik IT Solution')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Klinik IT" height="80">
            Klinik IT Solution
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <h6 class="dropdown-header">Jasa Instalasi</h6>
                        <a class="dropdown-item" href="/layanan/instalasi_software">Instalasi Software</a>
                        <a class="dropdown-item" href="/layanan/instalasi_jaringan">Instalasi Jaringan</a>
                        <a class="dropdown-item" href="/layanan/perakitan_instalasi">Perakitan & Instalasi Komputer</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Jasa Servis</h6>
                        <a class="dropdown-item" href="/layanan/servis_komputer">Komputer</a>
                        <a class="dropdown-item" href="/layanan/servis_laptop">Notebook / Laptop</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informasi</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/informasi/waktu">Waktu Service</a>
                        <a class="dropdown-item" href="/informasi/biaya">Biaya Service</a>
                        <a class="dropdown-item" href="/informasi/daftar_aplikasi">Daftar Aplikasi</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Toturial Perbaikan</h6>
                        <a class="dropdown-item" href="/informasi/toturial_layar">Ganti Layar Laptop</a>
                        <a class="dropdown-item" href="/informasi/toturial_InstalasiOS">Instalasi OS</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="/toko">Toko</a></li>
                <li class="nav-item"><a class="nav-link" href="/tentang">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="/admin/dashboard">Admin</a></li>
                <div class="kananAtas">
                    <a href="/daftar"><button class="buttonD">Daftar</button></a>
                    <div class="divider"></div>
                    <a href="/login"><button class="buttonD">Masuk</button></a>
                </div>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <div class="footer">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Klinik IT"/>
        <p>Universitas Lambung Mangkurat</p>
        <p>Kota Banjarmasin, Kalimantan Selatan.</p>
        <p>Kode POS 70121.</p>
        <div class="social-media">
            <a href="#"><i class="fab fa-instagram"></i> klinik_it</a>
            <a href="#"><i class="fab fa-twitter"></i> klinik_it</a>
            <a href="#"><i class="fab fa-facebook"></i> klinik_it</a>
        </div>
        <p>KLINIK IT Copyright 2024</p>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>