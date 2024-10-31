<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'keranjang'; // Nama tabel di database
    protected $fillable = ['user_id', 'produk_id', 'jumlah'];
}
