<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman beranda.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Menampilkan halaman tentang kami.
     *
     * @return \Illuminate\View\View
     */
    public function tentang()
    {
        return view('tentang');
    }
}