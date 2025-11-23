<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barang extends Model
{
    // Table name (optional, Laravel auto-detect)
    protected $table = 'barangs';
    
    // Primary key
    protected $primaryKey = 'id_barang';
    
    // Fillable fields
    protected $fillable = [
        'id_kategori',
        'nama_barang',
        'Harga',
        'Stok',
        'Satuan'
    ];

    /**
     * Relasi ke model KategoriBarang (BelongsTo)
     * Satu barang belongs to satu kategori
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(kategori_barang::class, 'id_kategori', 'id_kategori');
    }

    /**
     * Relasi ke model StokBarang (HasMany) 
     * Satu barang has many stok records
     */
    public function stokBarang(): HasMany
    {
        return $this->hasMany(stok_barang::class, 'id_barang', 'id_barang');
    }
}
