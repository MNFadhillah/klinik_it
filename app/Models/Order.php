<?php

// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda dengan konvensi Laravel (misalnya jika nama tabel adalah orders)
    protected $table = 'order';

    // Menentukan kolom yang boleh diisi (mass assignable)
    protected $fillable = [
        'nama_pelanggan',
        'alamat',
        'nomor_telepon',
        'jumlah_barang',
        'total_harga',
        'status',
        'id_pengguna',
    ];

    // Menentukan relasi dengan model User (pengguna)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_pengguna');
    }

    // Menentukan relasi dengan model OrderDetail
    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }

    // app/Models/OrderDetail.php
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }


}
