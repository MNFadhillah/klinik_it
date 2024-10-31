<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // \App\Models\Produk::create([
        //     'nama_produk' => 'Xiaomi RedmiBook 15',
        //     'harga' => 4919000,
        //     'stok' => 10,
        //     'deskripsi' => 'Laptop Xiaomi RedmiBook 15 intel i3-1115G4 Ram 8GB + SSD 256GB W10 - Non Bundling',
        //     'gambar' => '1.jpg'
        // ]);
        // \App\Models\Produk::create([
        //     'nama_produk' => 'Lenovo Thinkpad X220',
        //     'harga' => 1390000,
        //     'stok' => 11,
        //     'deskripsi' => 'Lenovo Thinkpad Laptop X220 Core i5 Ram 4/8GB HDD 320/256GB Murah - X220I I3 GEN2',
        //     'gambar' => '2.jpg'
        // ]);
    
        // \App\Models\Produk::create([
        //     'nama_produk' => 'Apple Macbook Air M1',
        //     'harga' => 12449000,
        //     'stok' => 7,
        //     'deskripsi' => '(RESMI IBOX) Apple MacBook Air M1 Chip 2020 256GB 8GB Garansi resmi - silver',
        //     'gambar' => '3.jpg'
        // ]);
    
        // \App\Models\Produk::create([
        //     'nama_produk' => 'ASUS VivoBook 14',
        //     'harga' => 5999000,
        //     'stok' => 5,
        //     'deskripsi' => 'ASUS VivoBook 14 M415DAO - RYZEN 3-3250U 8GB SSD 512GB 14" FHD W10 OHS',
        //     'gambar' => '4.jpg'
        // ]);
        
        // \App\Models\Produk::create([
        //     'nama_produk' => 'Motherboard Rx7',
        //     'harga' => 263000,
        //     'stok' => 6,
        //     'deskripsi' => 'Motherboard Rx7 H61 Lga 1155 Ddr3 H61 Mainboard Support Nvme',
        //     'gambar' => '6.webp'
        // ]);

        // \App\Models\Produk::create([
        //     'nama_produk' => 'Motherboard MacBook Pro',
        //     'harga' => 7500000,
        //     'stok' => 9,
        //     'deskripsi' => 'Motherboard MacBook Pro A2141 mesin 2019 820 01700 16+512 logicboard',
        //     'gambar' => '7.webp'
        // ]);
        
        // \App\Models\Produk::create([
        //     'nama_produk' => 'Motherboard Asrock',
        //     'harga' => 1058000,
        //     'stok' => 10,
        //     'deskripsi' => 'Motherboard Asrock H610M-HVS - LGA1700',
        //     'gambar' => '8.png'
        // ]);
        
        // \App\Models\Produk::create([
        //     'nama_produk' => 'Motherboard KYO SOYO iCRAFT',
        //     'harga' => 2350000,
        //     'stok' => 3,
        //     'deskripsi' => 'KYO SOYO iCRAFT B760 WIFI Motherboard Intel B760 LGA1700 DDR5',
        //     'gambar' => '9.webp'
        // ]);
        
        // \App\Models\Produk::create([
        //     'nama_produk' => 'Proccesor AMD Ryzen 3 4100',
        //     'harga' => 1175000,
        //     'stok' => 17,
        //     'deskripsi' => 'Proccesor AMD Ryzen 3 4100 3,8Ghz Socket AM4 Zen 2 Garansi Resmi',
        //     'gambar' => '10.png'
        // ]);
        
        // \App\Models\Produk::create([
        //     'nama_produk' => 'Processor INTEL CORE i9 14900K',
        //     'harga' => 9895000,
        //     'stok' => 6,
        //     'deskripsi' => 'Processor INTEL CORE i9 14900K 6.0Ghz 24C/32T (LGA 1700)',
        //     'gambar' => '11.png'
        // ]);
        // \App\Models\Produk::create([
        //     'nama_produk' => 'Proccesor AMD Ryzen 7 7800X3D',
        //     'harga' => 9895000,
        //     'stok' => 6,
        //     'deskripsi' => 'Proccesor AMD Ryzen 7 7800X3D Box 4.2GHz Socket AM5',
        //     'gambar' => '12.webp'
        // ]);
        \App\Models\Produk::create([
            'nama_produk' => 'Router WiFi',
            'harga' => 264000,
            'stok' => 6,
            'deskripsi' => 'Tenda AC6 - Router WiFi Dual-band Canggih AC1200',
            'gambar' => 'router1.webp',
            'kategori_id'=> 4,
        ]);
        // \App\Models\Produk::create([
        //     'nama_produk' => 'Switch',
        //     'harga' => 549000,
        //     'stok' => 10,
        //     'deskripsi' => 'TP LINK 24-Port 10/100Mbps Desktop/Rackmount Switch TL-SF1024D',
        //     'gambar' => 'switchjaringan.webp',
        //     'kategori_id' => 4,
        // ]);




    }
}
