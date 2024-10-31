<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KategoriController extends Controller
{
    //
    public function index()
{
    $categories = Kategori::all(); // Ambil semua kategori
    return view('user.toko.kategori', compact('categories'));
}

}
