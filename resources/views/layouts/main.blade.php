<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klinik IT Solution</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="assets/img/logo.jpg" alt="Logo Klinik IT" height="80">
            Klinik IT Solution
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Layanan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <h6 class="dropdown-header">Jasa Instalasi</h6>
                      <a class="dropdown-item" href="/layanan/instalasi_software">Instalasi Software</a>
                      <a class="dropdown-item" href="/layanan/instalasi-jaringan">Instalasi Jaringan</a>
                      <a class="dropdown-item" href="/layanan/perakitan-instalasi-komputer">Perakitan & Instalasi Komputer</a>
                      <div class="dropdown-divider"></div>
                      <h6 class="dropdown-header">Jasa Servis</h6>
                      <a class="dropdown-item" href="/layanan/servis-komputer">Komputer</a>
                      <a class="dropdown-item" href="/layanan/servis-laptop">Notebook / Laptop</a>
                    </div>
                  </li>
                  
                  
                <li class="nav-item">
                    <a class="nav-link" href="/informasi">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/toko">Toko</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tentang">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container m-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-auto py-4">
        <div class="container">
            <div class="row">

                
                <div class="col-md-6">
                    <p class="text-center">Universitas Lambung Mangkurat, Kota Banjarmasin, Kalimantan Selatan. Kode POS 70121.</p>
                </div>
                <div class="col-md-6">

                    <div class="social-media">
                        <a href="https://instagram.com/klinik_it" target="_blank"><img src="assets/img/instagram.png" alt="Instagram" height="40"></a>
                        <a href="https://facebook.com/klinik_it" target="_blank"><img src="assets/img/facebook.png" alt="Facebook" height="45"></a>
                        <a href="https://twitter.com/klinik_it" target="_blank"><img src="assets/img/Twitter.png" alt="Twitter" height="40"></a>
                    </div>
                </div>
            </div>
            <p class="text-center">Copyright © Klinik IT 2024</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
