<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instalasi Software</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Link ke Font Awesome -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            /* background-color: #e6effa; */
            margin: 0;
        }

        header {
            background-color: #b3d9ff; /* Warna biru muda */
            text-align: center;
            padding: 20px;
        }

        header h1 {
            font-size: 2.5rem;
            color: #4a2c82;
        }

        /* Gambar di tengah */
        .image-container {
            text-align: center;
            margin: 20px 0;
        }

        .image-container img {
            width: 300px;
        }

        /* Teks di bawah gambar dengan layout rata kiri */
        .description {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: left;
        }

        .description p {
            font-size: 1.1rem;
            margin-bottom: 20px; /* Tambahkan jarak bawah agar lebih rapi */
            color: #65558F; /* Warna ungu untuk teks */
        }

        .description ul {
            font-size: 1.1rem;
            margin-top: 10px;
            margin-bottom: 20px; /* Tambahkan jarak bawah agar lebih rapi */
        }

        .description ul li {
            margin-bottom: 10px;
            color: #65558F; /* Warna ungu untuk item daftar */
        }

        /* Footer tombol rata kanan kiri */
        .button-container {
            display: flex;
            justify-content: space-between;
            max-width: 800px;
            margin: 20px auto;
            padding: 0 10px;
        }

        .button-container section {
            text-align: center;
        }

        .button-container p {
            color: #65558F; /* Warna ungu untuk teks di tombol */
        }

        .button-container button {
            background-color: #65558F;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 25px;
            transition: background-color 0.3s ease;
            display: flex; /* Gunakan flexbox untuk tata letak */
            align-items: center; /* Vertikal align icon dan teks */
            margin-top: 10px; /* Tambahkan jarak atas untuk pemisahan */
        }

        .button-container button i {
            margin-right: 8px; /* Spasi antara ikon dan teks */
        }

        .button-container button:hover {
            background-color: #8967B3;
        }

        .center-button {
            display: flex;
            flex-direction: column; /* Vertikal */
            align-items: center; /* Pusatkan tombol di tengah */
            margin-top: 10px; /* Tambahkan jarak atas */
        }
    </style>
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="../assets/img/logo.jpg" alt="Logo Klinik IT" height="80">
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
                      <a class="dropdown-item" href="/layanan/instalasi_jaringan">Instalasi Jaringan</a>
                      <a class="dropdown-item" href="/layanan/perakitan_instalasi">Perakitan & Instalasi Komputer</a>
                      <div class="dropdown-divider"></div>
                      <h6 class="dropdown-header">Jasa Servis</h6>
                      <a class="dropdown-item" href="/layanan/servis_komputer">Komputer</a>
                      <a class="dropdown-item" href="/layanan/servis_laptop">Notebook / Laptop</a>
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
    <header>
        <h1>Jasa Servis Komputer</h1>
    </header>

    <div class="image-container">
        <img src="../assets/img/servis_komputer.jpg" alt="Foto Instalasi Software">
    </div>

    <!-- Teks di bawah gambar dengan layout rata kiri -->
    <div class="description">
        <ul>
            <li>Servis komputer adalah proses perawatan, perbaikan, atau peningkatan sistem komputer untuk memastikan kinerjanya tetap optimal. Ini mencakup :</li>
            <br>
            <p>a. Pembersihan Fisik: Menghilangkan debu dan kotoran dari komponen hardware untuk mencegah overheating.</p>
            <p>b. Pemeriksaan dan Penggantian Komponen: Memeriksa hardware seperti hard drive, RAM, atau motherboard, dan mengganti jika ada yang rusak.</p>
            <p>c. Perbaikan Software: Memperbaiki masalah pada sistem operasi, virus, atau program yang menyebabkan kinerja lambat atau error.</p>
            <p>d. Pembaruan: Meng-upgrade software atau hardware untuk meningkatkan performa.</p>
            <p>e. Optimasi Sistem: Melakukan defragmentasi, pembersihan file sampah, dan optimasi setting agar komputer berjalan lebih lancar.</p>
            <br>
            <li>Hasil akhir adalah komputer yang sudah diservis siap diuji dan digunakan sesuai fungsi.</li>
            <br>
        </ul>
    </div>

    <!-- Tombol Mulai Chat dan Formulir -->
    <div class="button-container">
        <section class="center-button">
            <p>Mulai Chat :</p>
            <button onclick="window.location.href='/layanan/chat'"><i class="fas fa-comments"></i>Click to Chat</button> <!-- Tombol Chat -->
        </section>
        <section class="center-button">
            <p>Ingin Instalasi? Isi formulir di bawah ini :</p>
            <button onclick="window.location.href='/formulir/form_servis'"><i class="fas fa-file-alt"></i>Klik untuk akses</button> <!-- Tombol Formulir -->
        </section>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
