<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Menampilkan halaman edit profil.
     *
     * @return \Illuminate\View\View
     */
    public function editProfil()
    {
        // Logika untuk mengambil data profil user
        return view('user.profil.edit_profil');
    }

        /**
     * Menampilkan halaman profil.
     *
     * @return \Illuminate\View\View
     */
    public function profil()
    {
        // Logika untuk mengambil data profil user
        return view('user.profil.profil');
    }

    /**
     * Menampilkan halaman sperpart.
     *
     * @return \Illuminate\View\View
     */
    public function sperpart()
    {
        // Logika untuk masuk sperpart
        return view('user.profil.sperpart');
    }

    /**
     * Memperbarui profil pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function updateProfil(Request $request)
    // {
    //     // Validasi input
    //     $validated = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
    //         // Tambahkan validasi lain sesuai kebutuhan
    //     ]);

    //     // Logika untuk memperbarui profil
    //     // ...

    //     return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    // }
}