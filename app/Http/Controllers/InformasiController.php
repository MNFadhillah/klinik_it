<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Menampilkan halaman informasi umum.
     *
     * @return \Illuminate\View\View
     */
    public function informasi()
    {
        return view('user.informasi');
    }

    /**
     * Menampilkan halaman informasi waktu layanan.
     *
     * @return \Illuminate\View\View
     */
    public function waktuService()
    {
        return view('user.informasi.waktu');
    }

    /**
     * Menampilkan halaman informasi biaya layanan.
     *
     * @return \Illuminate\View\View
     */
    public function biayaService()
    {
        return view('user.informasi.biaya');
    }

    /**
     * Menampilkan halaman daftar aplikasi.
     *
     * @return \Illuminate\View\View
     */
    public function daftarAplikasi()
    {
        return view('user.informasi.daftar_aplikasi');
    }

    
}