

<?php $__env->startSection('title', 'Jasa Servis'); ?>

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
    <h1>Jasa Servis</h1>
</header>

<!-- Teks di bawah gambar dengan layout rata kiri -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jasa Servis Komputer</h5>
                    <ul class="list-unstyled">
                        <li>Pembersihan Fisik: Menghilangkan...</li>
                        <li>Pemeriksaan dan Penggantian...</li>
                        <li>Perbaikan Software: Memperbaiki...</li>
                    </ul>
                    <a href="/layanan/servis_komputer" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jasa Servis Laptop/Notebook</h5>
                    <ul class="list-unstyled">
                        <li>Perbaikan Hardware: Mengganti atau...</li>
                        <li>Perbaikan Software: Instalasi ulang OS...</li>
                        <li>Upgrade Komponen: Meningkatkan RAM...</li>
                    </ul>
                    <a href="/layanan/servis_laptop" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_it\resources\views/user/layanan/jasa_servis.blade.php ENDPATH**/ ?>