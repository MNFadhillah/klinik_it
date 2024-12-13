<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;   // Import Auth
use Illuminate\Http\RedirectResponse; // Import RedirectResponse

class LoginController extends Controller
{
    /**
     * Menampilkan halaman login.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('login');
    }

    /**
     * Melakukan autentikasi pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function auth(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        // Autentikasi pengguna
        if (Auth::attempt($credentials, $request->checkRemember)) {
            $request->session()->regenerate();
    
            // Cek apakah user adalah admin
            if (Auth::user()->is_admin == 1) {
                return redirect()->route('admin.dashboard'); // sesuaikan dengan route dashboard admin
            } else {
                return redirect()->route('home'); // Redirect ke dashboard pengguna biasa
            }
        }
    
        return back()->withErrors([
            'email' => 'Tidak ada akun yang cocok dengan inputan anda'
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    // public function ShowDashboardAdmin()
    // {
    //     return view('admin.dashboardAdmin');
    // }

}
