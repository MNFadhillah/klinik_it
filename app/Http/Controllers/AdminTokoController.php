<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTokoController extends Controller
{
    public function pesanan()
    {
        // Tampilkan daftar pesanan
        return view('admin/toko/pesanan'); // Pastikan file ini ada
    }

    public function stok()
    {
        // Tampilkan daftar stok
        return view('admin/toko/stok'); // Pastikan file ini ada
    }
}
