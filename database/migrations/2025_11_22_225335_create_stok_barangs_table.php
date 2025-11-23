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
        Schema::create('stok_barangs', function (Blueprint $table) {
            $table->id('id_stok-barang');
            
            // foregin key 
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_barang')
                  ->references('id_barang')  // sesuai dengan primary key di kategori_barangs
                  ->on('barangs')
                  ->onDelete('restrict');


            $table->enum('kondisi',['Tersedia','Kosong']);

            $table->integer("Jumlah");
            $table->date("Tanggal");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_barangs');
    }
};
