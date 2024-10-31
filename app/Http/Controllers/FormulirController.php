<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servis; // Pastikan model Servis diimpor dengan benar

class FormulirController extends Controller
{
    // Method untuk halaman formulir servis
    public function formservis()
    {
        return view('user/formulir/form_servis');
    }

    // Method untuk halaman formulir instalasi
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
    public function submitFormServis(Request $request)
    {
        // Validasi input dari formulir
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
            'jenis_servis' => 'required|string',
            'masalah' => 'required|string',
            'tanggal_masuk' => 'required|date',
        ]);

        // Simpan data ke database
        $servis = new Servis(); // Perbaiki dengan membuat instance dari model Servis, bukan FormulirController
        $servis->nama = $validated['nama'];
        $servis->no_hp = $validated['no_hp'];
        $servis->alamat = $validated['alamat'];
        $servis->jenis_servis = $validated['jenis_servis'];
        $servis->masalah = $validated['masalah'];
        $servis->tanggal_masuk = $validated['tanggal_masuk'];
        $servis->save(); // Simpan data ke database

        // Redirect ke halaman dengan pesan sukses
        return redirect()->back()->with('success', 'Formulir servis berhasil dikirim');
    }

    /**
     * Memproses pengiriman formulir instalasi.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submitFormInstalasi(Request $request)
    {
        // Logika untuk memproses formulir instalasi
        // Validasi, penyimpanan data, dll.

        // Contoh sederhana:
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'jenis_instalasi' => 'required|string',
        ]);

        // Simpan data atau lakukan tindakan lain
        return redirect()->back()->with('success', 'Formulir instalasi berhasil dikirim');
    }
}
