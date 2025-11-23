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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // / foregin key 
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_barang')
                  ->references('id_barang')  // sesuai dengan primary key di kategori_barangs
                  ->on('barangs')
                  ->onDelete('restrict');

            // / foregin key 
            $table->unsignedBigInteger('NIS');
            $table->foreign('NIS')
                  ->references('NIS')  // sesuai dengan primary key di kategori_barangs
                  ->on('users')
                  ->onDelete('restrict');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
