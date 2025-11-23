<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class stok_barang extends Model
{
    // Nama table (opsional, Laravel otomatis detect)
    protected $table = 'stok_barangs';
    
    // Primary key (perbaiki nama tanpa hyphen)
    protected $primaryKey = 'id_stok-barang';
    
    // Fillable fields
    protected $fillable = [
        'id_barang',
        'jumlah_stok',
        'tanggal_update', 
        'jenis_transaksi',
        'keterangan'
    ];
    
    // Cast tanggal
    protected $casts = [
        'tanggal_update' => 'date'
    ];

    /**
     * Relasi ke model Barang
     */
    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}
