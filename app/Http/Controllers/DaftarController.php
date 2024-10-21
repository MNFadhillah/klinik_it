<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
     /**
     * Menampilkan halaman daftar.
     *
     * @return \Illuminate\View\View
     */
    public function daftar()
    {
        return view('daftar');
    }
}
