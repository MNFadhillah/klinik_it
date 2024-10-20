<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Menampilkan dashboard admin.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        // Logika untuk mengambil data yang diperlukan di dashboard
        // Misalnya: jumlah pesanan, pendapatan, statistik, dll.
        return view('admin.dashboardAdmin');
    }

    /**
     * Menampilkan daftar pesanan.
     *
     * @return \Illuminate\View\View
     */
    public function pesanan()
    {
        // Logika untuk mengambil data pesanan
        return view('admin.toko.pesanan');
    }

    /**
     * Menampilkan daftar stok.
     *
     * @return \Illuminate\View\View
     */
    public function stok()
    {
        // Logika untuk mengambil data stok
        return view('admin.toko.stok');
    }
}