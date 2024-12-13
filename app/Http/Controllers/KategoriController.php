<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KategoriController extends Controller
{
    public function index()
    {
        $categories = Kategori::all(); // Ambil semua kategori
        return view('user.toko.kategori', compact('categories'));
    }

    public function showProducts($id)
    {
        // Cari kategori berdasarkan ID
        $category = Kategori::findOrFail($id);

        // Ambil produk terkait
        $products = Produk::where('kategori_id', $id)->get();

        return view('user.toko.produk', compact('category', 'products'));
    }


}