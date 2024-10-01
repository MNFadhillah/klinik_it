<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instalasi Software</title>
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
    <header>
        <h1>Instalasi Software</h1>
    </header>

    <div class="image-container">
        <img src="../assets/img/instalasi_software.jpg" alt="Foto Instalasi Software">
    </div>

    <!-- Teks di bawah gambar dengan layout rata kiri -->
    <div class="description">
        <ul>
            <li>Instalasi software adalah proses menambahkan perangkat lunak ke sistem komputer agar bisa digunakan. Tahapannya meliputi:</li>
            <br>
            <p>1. Persiapan: Unduh atau akses berkas instalasi, pastikan perangkat memenuhi persyaratan.</p>
            <p>2. Memulai Instalasi: Jalankan berkas instalasi dan berikan izin administrator jika diperlukan.</p>
            <p>3. Wizard Instalasi: Ikuti petunjuk untuk memilih opsi seperti lokasi penyimpanan dan persetujuan lisensi.</p>
            <p>4. Proses Instalasi: Sistem menyalin berkas dan menambahkan konfigurasi yang diperlukan.</p>
            <p>5. Selesai: Instalasi selesai, software siap digunakan; kadang perlu restart.</p>
            <br>
            <li>Hasil akhir adalah software yang siap diuji dan digunakan sesuai fungsi.</li>
        </ul>
    </div>

    <!-- Tombol Mulai Chat dan Formulir -->
    <div class="button-container">
        <section class="center-button">
            <p>Mulai Chat :</p>
            <br>
            <button><i class="fas fa-comments"></i>Click to Chat</button> <!-- Ikon untuk chat -->
        </section>
        <section class="center-button">
            <p>Ingin Instalasi? Isi formulir di bawah ini :</p><br>
            <button><i class="fas fa-file-alt"></i>Klik untuk akses</button> <!-- Ikon untuk akses -->
        </section>
    </div>
</body>
</html>
