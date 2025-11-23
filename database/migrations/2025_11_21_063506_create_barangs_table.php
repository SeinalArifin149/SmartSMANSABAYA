<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id('id_barang');

            // Buat kolom foreign key dengan tipe yang sama
            $table->unsignedBigInteger('id_kategori');
            
            // Reference ke kolom id_kategori (bukan id)
            $table->foreign('id_kategori')
                  ->references('id_kategori')  // sesuai dengan primary key di kategori_barangs
                  ->on('kategori_barangs')
                  ->onDelete('restrict');

            $table->string('nama_barang');
            $table->integer('Harga');
            $table->integer('Stok');
            $table->enum('Satuan', ['kg', 'Liter']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
