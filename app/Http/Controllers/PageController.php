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
        return view('tentang');
    }
    // Method untuk halaman instalasi software
    public function software()
    {
        return view('user/layanan/instalasi_software');
    }

    // Method untuk halaman instalasi jaringan
    public function jaringan()
    {
        return view('user/layanan/instalasi_jaringan');
    }

     // Method untuk halaman perakitan instalasi
     public function perakitan()
     {
         return view('user/layanan/perakitan_instalasi');
     }

     // Method untuk halaman servis komputer
     public function serviskomputer()
     {
         return view('user/layanan/servis_komputer');
     }

      // Method untuk halaman servis laptop
      public function servislaptop()
      {
          return view('user/layanan/servis_laptop');
      }

       // Method untuk halaman formulir servis
       public function formservis()
       {
           return view('user/formulir/form_servis');
       }

        // Method untuk halaman formulir servis
        public function forminstalasi()
        {
            return view('user/formulir/form_instalasi');
        }

        // Method untuk halaman formulir servis
        public function chat()
        {
            return view('user/layanan/chat');
        }
}
