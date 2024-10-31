<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Menampilkan halaman instalasi software.
     *
     * @return \Illuminate\View\View
     */
    public function software()
    {
        return view('user.layanan.instalasi_software');
    }

    /**
     * Menampilkan halaman instalasi jaringan.
     *
     * @return \Illuminate\View\View
     */
    public function jaringan()
    {
        return view('user.layanan.instalasi_jaringan');
    }

    /**
     * Menampilkan halaman perakitan instalasi.
     *
     * @return \Illuminate\View\View
     */
    public function perakitan()
    {
        return view('user.layanan.perakitan_instalasi');
    }

    /**
     * Menampilkan halaman servis komputer.
     *
     * @return \Illuminate\View\View
     */
    public function servisKomputer()
    {
        return view('user.layanan.servis_komputer');
    }

    /**
     * Menampilkan halaman servis laptop.
     *
     * @return \Illuminate\View\View
     */
    public function servisLaptop()
    {
        return view('user.layanan.servis_laptop');
    }

    /**
     * Menampilkan halaman chat.
     *
     * @return \Illuminate\View\View
     */
    public function chat()
    {
        return view('user.layanan.chat');
    }

        /**
     * Menampilkan halaman jasa instalasi.
     *
     * @return \Illuminate\View\View
     */
    public function jasaInstalasi()
    {
        return view('user.layanan.jasa_instalasi');
    }

            /**
     * Menampilkan halaman jasa servis.
     *
     * @return \Illuminate\View\View
     */
    public function jasaServis()
    {
        return view('user.layanan.jasa_servis');
    }
}