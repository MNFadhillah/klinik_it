<?php $__env->startSection('content'); ?>
    
    <style>
    
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 50px;
        background-color: #ffffff;
    }
    .header .text {
        max-width: 50%;
    }
    .header .text h2 {
        color: #4a148c;
        font-size: 75px;
        margin: 0;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    .header .text p {
        color: #6a1b9a;
        font-size: 27px;
        margin: 10px 0 0;
    }
    .header .image {
        max-width: 70%;
    }
    .header .image img {
        width: 110%;
        height: 100%;
        /* border-radius: 20px; */
    }

    h1 {
        font-family: 'Nunito', sans-serif;
        font-size: 48px;
        color: #3A0CA3;
        margin-top: 50px;
        text-align: center;
        font-weight: bold;
        }
    
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
    <div class="header">
        <div class="text">
         <h2>
          KLINIK IT
          <br/>
          IT SOLUTION
         </h2>
         <p>
          Komputer Anda Sehat, Kami Semangat
         </p>
        </div>
        <div class="image">
         
         <img src="<?php echo e(asset('assets/img/BGIT.png')); ?>" alt="BGIT">
        </div>
    </div>
</br>
</br>
<div class="container mt-5">
    <h1 class="text-center mb-5">LAYANAN</h1>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">JASA INSTALASI</h5>
                    <ul class="list-unstyled">
                        <li>Instalasi Software</li>
                        <li>Instalasi Jaringan</li>
                        <li>Perakitan & Instalasi Komputer</li>
                    </ul>
                    <a href="/layanan/jasa_instalasi" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">TOKO SPAREPART</h5>
                    <ul class="list-unstyled">
                        <li>Produk Komputer & Laptop</li>
                        <li>Pembelian Online</li>
                        <li>E-wallet & M-Banking</li>
                    </ul>
                    <a href="/toko/produk" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">JASA SERVIS</h5>
                    <ul class="list-unstyled">
                        <li>Servis Komputer</li>
                        <li>Servis Laptop</li>
                        <li>Konsultasi via Chat</li>
                    </ul>
                    <a href="/layanan/jasa_servis" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-center mb-5 mt-5">INFORMASI</h1>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Waktu & Biaya Service</h5>
                    <p class="card-text">Informasi lengkap tentang estimasi waktu dan biaya layanan kami</p>
                    <a href="/informasi/servis" class="btn btn-primary mr-2">Waktu Service</a>
                    <a href="/informasi/biaya" class="btn btn-primary">Biaya Service</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tutorial & Panduan</h5>
                    <p class="card-text">Panduan langkah demi langkah untuk berbagai layanan IT</p>
                    <a href="/informasi/daftar_aplikasi" class="btn btn-primary mr-2">Daftar Aplikasi</a>
                    <a href="/informasi/isi_informasi" class="btn btn-primary">Tutorial</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Formulir Layanan</h5>
                    <p class="card-text">Isi formulir untuk memulai layanan</p>
                    <a href="/formulir/form_servis" class="btn btn-primary mr-2">Form Servis</a>
                    <a href="/formulir/form_instalasi" class="btn btn-primary">Form Instalasi</a>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-center mb-5 mt-5">Tentang Kami</h1>
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Klinik IT</h5>
                    <ul class="list-unstyled">
                        <li>Mengapa Harus Memilih Klinik IT?</li>
                        <li>Visi Misi</li>
                    </ul>
                    <a href="/tentang" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div><?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_it\resources\views/home.blade.php ENDPATH**/ ?>