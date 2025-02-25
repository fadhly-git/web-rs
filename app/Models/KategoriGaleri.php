<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    protected $primaryKey = 'id_kategori_galeri';
    public $timestamps = false;

    protected $fillable = [
        'bahasa',
        'slug_kategori_galeri',
        'nama_kategori_galeri',
        'urutan',
    ];
}
