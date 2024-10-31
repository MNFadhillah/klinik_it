@extends('layouts.main')

@section('title', 'Tutorial')

@section('content')
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
    <h1>INFORMASI</h1>
</header>

<!-- Teks di bawah gambar dengan layout rata kiri -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ganti Layar Laptop</h5>
                    <ul class="list-unstyled">
                        <li>Buka bezel layar:</li>
                        <li>Lepaskan kabel video:</li>
                        <li>Angkat layar lama dan pasang layar baru:</li>
                    </ul>
                    <a href="/informasi/tutorial_layar" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Instalasi OS</h5>
                    <ul class="list-unstyled">
                        <li>Persiapan:</li>
                        <li>Atur boot order di BIOS:</li>
                        <li>Penyesuaian:</li>
                    </ul>
                    <a href="/informasi/tutorial_InstalasiOS" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pemulihan</h5>
                    <ul class="list-unstyled">
                        <li>Buka Recycle Bin</li>
                        <li>Klik kanan pada file yang ingin...</li>
                        <li>Jika sudah, cek di folder tempat...</li>
                    </ul>
                    <a href="/informasi/tutorial_pemulihan" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Perbaikan Koneksi</h5>
                    <ul class="list-unstyled">
                        <li>Buka Setting</li>
                        <li>Pilih network and internet</li>
                        <li>Klik Advanced network settings</li>
                    </ul>
                    <a href="/informasi/tutorial_perbaikanKoneksi" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Upgrade RAM</h5>
                    <ul class="list-unstyled">
                        <li>Buka panel akses RAM:</li>
                        <li>Lepaskan RAM lama (jika akan diganti)</li>
                        <li>Pasang RAM baru:</li>
                    </ul>
                    <a href="/informasi/tutorial_ram" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Membersihkan Kipas</h5>
                    <ul class="list-unstyled">
                        <li>Buka panel akses:</li>
                        <li>Lokasi kipas:</li>
                        <li>Lepas Kipas:</li>
                    </ul>
                    <a href="/informasi/tutorial_kipas" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection