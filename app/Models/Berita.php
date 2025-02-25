<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Berita extends Model
{
    protected $table = 'beritas';
    protected $primaryKey = 'id_berita';
    protected $fillable = [
        'id_user',
        'id_kategori',
        'bahasa',
        'updater',
        'slug_berita',
        'judul_berita',
        'isi',
        'status_berita',
        'jenis_berita',
        'keywords',
        'gambar',
        'icon',
        'hits',
        'urutan',
        'tanggal_mulai',
        'tanggal_selesai',
        'tanggal_post',
        'tanggal_publish'
    ];

    public function users(): BelongsTo 
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
