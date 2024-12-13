<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

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

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');  // Redirect ke halaman login setelah logout
    }
}