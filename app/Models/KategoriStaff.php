<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriStaff extends Model
{
    protected $primaryKey = 'id_kategori_staff';
    public $timestamps = false;

    protected $fillable = [
        'bahasa',
        'slug_kategori_staff',
        'nama_kategori_staff',
        'keterangan',
        'urutan',
    ];
}
