<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulirController extends Controller
{
    // Method untuk halaman formulir servis
    public function formservis()
    {
        return view('user/formulir/form_servis');
    }

     // Method untuk halaman formulir servis
     public function forminstalasi()
     {
         return view('user/formulir/form_instalasi');
     }

    /**
     * Memproses pengiriman formulir servis.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function submitFormServis(Request $request)
    // {
    //     // Logika untuk memproses formulir servis
    //     // Validasi, penyimpanan data, dll.
        
    //     // Contoh sederhana:
    //     // $validated = $request->validate([
    //     //     'nama' => 'required',
    //     //     'email' => 'required|email',
    //     //     'deskripsi_masalah' => 'required',
    //     // ]);

    //     // Simpan data atau lakukan tindakan lain

    //     return redirect()->back()->with('success', 'Formulir servis berhasil dikirim');
    // }

    /**
     * Memproses pengiriman formulir instalasi.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function submitFormInstalasi(Request $request)
    // {
    //     // Logika untuk memproses formulir instalasi
    //     // Validasi, penyimpanan data, dll.
        
    //     // Contoh sederhana:
    //     // $validated = $request->validate([
    //     //     'nama' => 'required',
    //     //     'email' => 'required|email',
    //     //     'jenis_instalasi' => ' required',
    //     // ]);

    //     // Simpan data atau lakukan tindakan lain

    //     return redirect()->back()->with('success', 'Formulir instalasi berhasil dikirim');
    // }
}