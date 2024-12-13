<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTokoController extends Controller
{
    // Menampilkan stok produk
    public function stok()
    {
        $produk = Produk::with('kategori')->get();
        $categories = Kategori::all();
        return view('admin.toko.stok', compact('produk', 'categories'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kategori_id' => 'required|exists:kategori,id',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'stok' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Validasi gambar
        ]);

        // Mengupload gambar jika ada
        $imagePath = null;
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');  // Menyimpan gambar di storage dan mendapatkan path-nya
        }

        // Menyimpan data produk beserta path gambar
        $product = new Produk([
            'nama_produk' => $request->input('nama_produk'),
            'kategori_id' => $request->input('kategori_id'),
            'harga' => $request->input('harga'),
            'deskripsi' => $request->input('deskripsi'),
            'stok' => $request->input('stok'),
            'gambar' => $imagePath, // Menyimpan path gambar
        ]);
        $product->save();

        return redirect()->route('admin.toko.stok')->with('success', 'Produk berhasil ditambahkan');
    }

    // Tampilkan form edit produk
    public function edit($produk_id)
    {
        $produk = Produk::findOrFail($produk_id);
        $categories = Kategori::all();
        return view('admin.toko.stok', compact('produk', 'categories'));
    }

    // Proses update produk
    public function update(Request $request, $produk_id)
{
    // Validasi input
    $request->validate([
        'nama_produk' => 'required|string|max:255',
        'kategori_id' => 'required|exists:kategori,id',
        'harga' => 'required|numeric',
        'stok' => 'required|integer',
        'deskripsi' => 'nullable|string|max:1000',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);

    // Temukan produk berdasarkan ID
    $produk = Produk::findOrFail($produk_id);
    
    // Ambil data yang diperlukan dari request
    $data = $request->only(['nama_produk', 'kategori_id', 'harga', 'stok', 'deskripsi']);

    // Proses upload gambar jika ada
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($produk->gambar) {
            Storage::delete('images/' . $produk->gambar);
        }

        // Simpan gambar baru
        $gambar = $request->file('gambar');
        $nama_file = time() . '_' . $gambar->getClientOriginalName();
        $path = $gambar->storeAs('images/', $nama_file);

        // Simpan path gambar ke database
        $data['gambar'] = $nama_file;
    }

    // Update produk
    $produk->update($data);

    return redirect()->route('admin.toko.stok')->with('success', 'Produk berhasil diperbarui');
}

    // Hapus produk
    public function destroy($produk_id)
    {
        try {
            $produk = Produk::findOrFail($produk_id);
            
            // Hapus gambar jika ada
            if ($produk->gambar) {
                Storage::delete('images/' . $produk->gambar); // Perbaiki path gambar
            }

            $produk->delete();
                return redirect()->route('admin.toko.stok')->with('success', 'Produk berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('admin.toko.stok')->with('error', 'Gagal menghapus produk');
        }
    }
}
