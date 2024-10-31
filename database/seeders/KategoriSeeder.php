<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // \App\Models\Kategori::create([
        //     'nama_kategori' => 'Laptop',
        //     'deskripsi' => 'Laptop dengan berbagai merk terkenal',
        //     'gambar' => 'laptop.jpg'
        // ]);
        // \App\Models\Kategori::create([
        //     'nama_kategori' => 'Sparepart',
        //     'deskripsi' => 'Sparepart berbagai jenis',
        //     'gambar' => 'sparepart.jpg'
        // ]);
        \App\Models\Kategori::create([
            'nama_kategori' => 'Peralatan Jaringan',
            'deskripsi' => 'Alat-alat jaringan berbagai jenis dan kegunaan',
            'gambar' => 'alatjaringan.jpg'
        ]);


    }
}
