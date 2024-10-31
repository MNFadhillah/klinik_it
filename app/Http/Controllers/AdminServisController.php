<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servis;

class AdminServisController extends Controller
{
    // Method untuk menampilkan daftar servis
    public function index()
    {
        // Mengambil semua data servis dari database
        $servisList = Servis::all();

        // Mengembalikan tampilan dengan data servis
        return view('admin.servis.service-komputer', compact('servisList'));
    }

    public function instalasiSoftware()
    {
        return view('admin.servis.instalasi-software');
    }

    public function instalasiJaringan()
    {
        return view('admin.servis.instalasi-jaringan');
    }

    public function serviceKomputer()
    {
        $servisList = Servis::all();
        return view('admin.servis.service-komputer', compact('servisList'));
    }

    public function serviceLaptop($formulir_id)
    {
        $servis = Servis::findOrFail($formulir_id);
        
        // Tampilkan halaman detail servis
        return view('admin.servis.service-laptop', compact('servis'));
    }

    public function perakitanInstalasiKomputer()
    {
        return view('admin.servis.perakitan-instalasi-komputer');
    }

    public function daftarChat()
    {
        return view('admin.servis.daftar-chat');
    }

    // Method untuk menampilkan detail servis berdasarkan ID
    public function show($formulir_id)
    {
        // Cari data servis berdasarkan ID
        $servis = Servis::findOrFail($formulir_id);

        // Tampilkan halaman detail servis
        return view('admin.servis.show', compact('servis'));
    }

    // Method untuk memperbarui status servis
    public function updateStatus(Request $request, $formulir_id)
{
    // Validasi status jika perlu
    $request->validate([
        'status' => 'required|string',
    ]);

    // Cari data servis berdasarkan ID
    $servis = Servis::findOrFail($formulir_id);

    // Update status sesuai dengan pilihan dari dropdown
    $servis->status = $request->input('status');
    $servis->save();

    // Redirect kembali ke halaman daftar servis dengan pesan sukses
    return redirect()->route('admin.servis.index')->with('success', 'Status berhasil diperbarui.');
}

}
