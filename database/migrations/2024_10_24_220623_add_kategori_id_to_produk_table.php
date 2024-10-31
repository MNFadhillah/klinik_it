<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('produk', function (Blueprint $table) {
            $table->bigInteger('kategori_id')->after('updated_at')->nullable(); // Menambahkan kolom kategori_id
            $table->foreign('kategori_id')->references('id')->on('categories')->onDelete('cascade'); // Menambahkan foreign key
        });
    }
    
    public function down()
    {
        Schema::table('produk', function (Blueprint $table) {
            $table->dropForeign(['kategori_id']);
            $table->dropColumn('kategori_id');
        });
    }
};
