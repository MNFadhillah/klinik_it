<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTokoController extends Controller
{

    public function stok()
{
    $produk = Produk::with('kategori')->get();
    $categories = Kategori::all();
    return view('admin.toko.stok', compact('produk', 'categories'));
}

public function store(Request $request)
{
    $request->validate([
        'nama_produk' => 'required',
        'harga' => 'required|numeric',
        'stok' => 'required|integer',
        'kategori_id' => 'required|exists:kategori,id',
        'deskripsi' => 'nullable|string|max:1000',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->except('gambar');

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $nama_file = time() . '_' . $gambar->getClientOriginalName();
        $path = $gambar->storeAs('public/img', $nama_file);
        $data['gambar'] = $nama_file;
    }

    try {
        Produk::create($data);
        return redirect()->route('admin.toko.stok')->with('success', 'Produk berhasil ditambahkan');
    } catch (\Exception $e) {
        return redirect()->route('admin.toko.stok')->with('error', 'Gagal menambahkan produk: ' . $e->getMessage());
    }
}

    // Tampilkan form edit produk
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $categories = Kategori::all();
        return view('admin.toko.edit', compact('produk', 'categories'));
    }

    // Proses update produk
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'kategori_id' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'deskripsi' => 'nullable|string|max:1000',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk gambar
        ]);

        $produk = Produk::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($produk->gambar) {
                Storage::delete('public/img/' . $produk->gambar);
            }

            $gambar = $request->file('gambar');
            $nama_file = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->storeAs('public/img', $nama_file);
            $data['gambar'] = $nama_file;
        }

        $produk->update($data);
        return redirect()->route('admin.toko.stok')->with('success', 'Produk berhasil diperbarui');
    }

    // Hapus produk
    public function destroy($id)
    {
        try {
            $produk = Produk::findOrFail($id);
            
            // Hapus gambar jika ada
            if ($produk->gambar) {
                Storage::delete('public/img/' . $produk->gambar);
            }

            $produk->delete();
            return redirect()->route('admin.toko.stok')->with('success', 'Produk berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('admin.toko.stok')->with('error', 'Gagal menghapus produk');
        }
    }
}
