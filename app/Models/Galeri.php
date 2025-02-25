<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Galeri extends Model
{
    protected $table = 'galeris';
    protected $primaryKey = 'id_galeri';

    protected $fillable = [
        'id_galeri',
        'id_kategori_galeri',
        'id_user',
        'bahasa',
        'judul_galeri',
        'jenis_galeri',
        'isi',
        'gambar',
        'website',
        'hits',
        'popup_status',
        'urutan',
        'status_text'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'id_user');
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriGaleri::class, 'id_kategori_galeri');
    }
}
