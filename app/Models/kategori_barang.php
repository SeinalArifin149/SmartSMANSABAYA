<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Pest\Mutate\Mutators\Visibility\FunctionProtectedToPrivate;

class kategori_barang extends Model
{
    //
    protected $primaryKey = 'id_kategori';

    public Function barangs ()
    {
        return $this->hasMany(Barang::class, 'id_kategori', 'id_kategori');
    }
}
