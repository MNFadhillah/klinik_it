<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method untuk halaman Beranda
    public function home()
    {
        return view('home');
    }
    // Method untuk halaman Informasi
    public function informasi()
    {
        return view('user/informasi');
    }

    // Method untuk halaman Toko
    public function toko()
    {
        return view('user/toko');
    }

    // Method untuk halaman Tentang Kami
    public function tentang()
    {
        return view('about');
    }
    // Method untuk halaman Tentang Kami
    public function software()
    {
        return view('user/layanan/instalasi_software');
    }
}
