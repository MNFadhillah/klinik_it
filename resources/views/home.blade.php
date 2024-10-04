@extends('layouts.main')

@section('content')
    {{-- <h1>Selamat Datang di Klinik IT Solution</h1>
    <p>Komputer Anda Sehat, Kami Semangat!</p> --}}
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
         {{-- <img alt="Illustration of a person repairing a computer" height="300" src="https://storage.googleapis.com/a1aa/image/BPw0uDVzXLZHKFAddUfkU1zcvyIPUUA8r9nwZRI9cSF0ooxJA.jpg" width="500"/> --}}
         <img src="{{ asset('assets/img/BGIT.png') }}" alt="BGIT">
        </div>
    </div>
    <h1>LAYANAN</h1>
    <div class="services">
        <div class="service-item">
            <h2>JASA INSTALASI</h2>
            <ul>
                <li>Instalasi Software (OS, aplikasi, dll)</li>
                <li>Instalasi Jaringan</li>
                <li>Perakitan - Instalasi Komputer</li>
            </ul>
            <a class="btn" href="#">Selengkapnya</a>
        </div>
        <div class="service-item">
            <h2>TOKO SPAREPART</h2>
            <ul>
                <li>Mengakses produk-produk untuk melakukan pembelian melalui e-wallet atau M-Banking</li>
            </ul>
            <a class="btn" href="#">Selengkapnya</a>
        </div>
        <div class="service-item">
            <h2>JASA SERVIS</h2>
            <ul>
                <li>Terkena virus</li>
                <li>Windows hang</li>
                <li>Backup data</li>
                <li>ataupun masalah lainnya.</li>
            </ul>
            <a class="btn" href="#">Selengkapnya</a>
        </div>
    </div>
    <h1>INFORMASI</h1>
    <div class="information">
        <div class="info-item">
            <p>Mengetahui informasi-informasi jasa yang diberikan seperti biaya & waktu. Dengan biaya yang terjangkau dan kualitas yang terjaga</p>
            <a class="btn" href="#">Selengkapnya</a>
        </div>
    </div>
@endsection
