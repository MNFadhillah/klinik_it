<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $fillable = ['nama_kategori', 'deskripsi', 'gambar', 'created_at', 'updated_at'];

    /**
     * Relasi One-to-Many dengan Produk
     * Satu kategori memiliki banyak produk.
     */
    public function produk()
    {
        return $this->hasMany(Produk::class, 'kategori_id');
    }
}
