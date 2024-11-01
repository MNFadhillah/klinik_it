

<?php $__env->startSection('title', 'Jasa Instalasi'); ?>

<?php $__env->startSection('content'); ?>

<style>
    .services, .information {
        margin: 50px 0;
        text-align: center;
        }
        .service-item, .info-item {
            background-color: #D0E8FF;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            display: inline-block;
            width: 250px;
            vertical-align: top;
            text-align: center;
        }
        .service-item h2, .info-item h2 {
            font-family: 'Nunito', sans-serif;
            font-size: 24px;
            color: #3A0CA3;
        }
        .service-item ul {
            list-style: none;
            padding: 0;
            text-align: left;
        }
        .service-item ul li {
            margin: 10px 0;
        }
        .btn {
            background-color: #3A0CA3;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .card {
            height: 100%;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-title {
            color: #3A0CA3;
        }
        .btn-primary {
            background-color: #3A0CA3;
            border-color: #3A0CA3;
        }
        .btn-primary:hover {
            background-color: #2A0A73;
            border-color: #2A0A73;
        }
</style>
<header>
    <h1>LAYANAN</h1>
    <h1>Jasa Instalasi</h1>
</header>

<!-- Teks di bawah gambar dengan layout rata kiri -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Instalasi Software</h5>
                    <ul class="list-unstyled">
                        <li>Persiapan: Unduh atau akses berkas...</li>
                        <li>Memulai Instalasi: Jalankan berkas...</li>
                        <li>Wizard Instalasi: Ikuti petunjuk...</li>
                    </ul>
                    <a href="/layanan/instalasi_software" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Instalasi Jaringan</h5>
                    <ul class="list-unstyled">
                        <li>Sumber di Server: Software di-host di...</li>
                        <li>Instalasi Terpusat: Instalasi dilakukan...</li>
                        <li>Instalasi Otomatis: Sering menggunakan...</li>
                    </ul>
                    <a href="/layanan/instalasi_jaringan" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Perakitan & Instalasi Komputer</h5>
                    <ul class="list-unstyled">
                        <li>Persiapan: Mengumpulkan komponen...</li>
                        <li>Perakitan: Memasang komponen...</li>
                        <li>Pengujian: Memastikan semua...</li>
                    </ul>
                    <a href="/layanan/perakitan_instalasi" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_it\resources\views/user/layanan/jasa_instalasi.blade.php ENDPATH**/ ?>