<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\ProdukSpesifikasi;
use App\Http\Controllers\Controller;

class ProdukSpesifikasiController extends Controller
{
    //
    // Menampilkan spesifikasi produk
    public function index($produkId)
    {
        $spesifikasi = ProdukSpesifikasi::where('produk_id', $produkId)->get();
        $produkList = Produk::all(); // Ambil semua produk
        return view('admin.toko.spesifikasi', compact('spesifikasi', 'produkId', 'produkList'));
    }

    public function showSpesifikasi($produk_id)
    {
        $spesifikasi = Produk::with('spesifikasi')->findOrFail($produk_id);
        return view('user.toko.detail', compact('spesifikasi'));
    }
    
    


    // Menyimpan spesifikasi baru
    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|exists:produk,produk_id',
            'isi_spesifikasi' => 'required|string|max:255',
        ]);
        
        $spesifikasi = new ProdukSpesifikasi();
        $spesifikasi->produk_id = $request->produk_id;
        $spesifikasi->isi_spesifikasi = $request->isi_spesifikasi;
        $spesifikasi->save();

        return redirect()->back()->with('success', 'Spesifikasi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $spesifikasi = ProdukSpesifikasi::findOrFail($id);
        // $produkList = Produk::all(); // Opsional, jika ingin mengubah produk terkait

        return view('admin.toko.spesifikasi.edit', compact('spesifikasi'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'produk_id' => 'required|exists:produk,id',
            'isi_spesifikasi' => 'required|string|max:255',
        ]);

        $spesifikasi = ProdukSpesifikasi::findOrFail($id);
        $spesifikasi->update([
            'produk_id' => $request->produk_id,
            'isi_spesifikasi' => $request->isi_spesifikasi,
        ]);

        return redirect()->route('admin.toko.spesifikasi')->with('success', 'Spesifikasi berhasil diperbarui!');
    }


}
