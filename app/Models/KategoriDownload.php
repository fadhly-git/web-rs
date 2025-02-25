<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriDownload extends Model
{
    protected $primaryKey = 'id_kategori_download';
    public $timestamps = false;

    protected $fillable = [
        'bahasa',
        'slug_kategori_download',
        'nama_kategori_download',
        'keterangan',
        'urutan',
    ];
}
