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

<<<<<<< HEAD
    /**
     * Menampilkan halaman Tutorial Layar.
=======
        /**
     * Menampilkan halaman tutorial Layar.
>>>>>>> 5bead0eb6c584ea257abe832ddb322e21994dada
     *
     * @return \Illuminate\View\View
     */
    public function tutorialLayar()
    {
        return view('user.informasi.tutorial_layar');
    }

<<<<<<< HEAD
    /**
     * Menampilkan halaman Tutorial Instalasi OS.
=======
            /**
     * Menampilkan halaman tutorial Instalasi OS.
>>>>>>> 5bead0eb6c584ea257abe832ddb322e21994dada
     *
     * @return \Illuminate\View\View
     */
    public function tutorialInstalasiOS()
    {
        return view('user.informasi.tutorial_InstalasiOS');
    }

    /**
     * Menampilkan halaman Tutorial Pemulihan.
     *
     * @return \Illuminate\View\View
     */
    public function tutorialPemulihan()
    {
        return view('user.informasi.tutorial_pemulihan');
<<<<<<< HEAD
    }

    /**
     * Menampilkan halaman Tutorial Perbaikan Koneksi.
     *
     * @return \Illuminate\View\View
     */
    public function tutorialPerbaikanKoneksi()
    {
=======
    }   
    public function tutorialperbaikankoneksi(){
>>>>>>> 5bead0eb6c584ea257abe832ddb322e21994dada
        return view('user.informasi.tutorial_perbaikanKoneksi');
    }

                    /**
     * Menampilkan halaman Toturial Upgrade Ram.
     *
     * @return \Illuminate\View\View
     */
    public function tutorialRam()
    {
        return view('user.informasi.tutorial_ram');
    }

                    /**
     * Menampilkan halaman Toturial Kipas.
     *
     * @return \Illuminate\View\View
     */
    public function tutorialKipas()
    {
        return view('user.informasi.tutorial_kipas');
    }
}