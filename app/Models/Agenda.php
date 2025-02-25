<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Agenda extends Model
{
    protected $table = 'agendas';
    protected $primaryKey = 'id_agenda';

    protected $fillable = [
        'id_user',
        'id_kategori_agenda',
        'bahasa',
        'slug_agenda',
        'judul_agenda',
        'isi',
        'status_agenda',
        'jenis_agenda',
        'keywords',
        'gambar',
        'icon',
        'hits',
        'urutan',
        'tanggal_mulai',
        'tanggal_selesai',
        'jam_mulai',
        'jam_selesai',
        'tempat',
        'google_map',
        'tanggal_post',
        'tanggal_publish'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'id_user');
    }

    public function kategoriAgenda(): BelongsTo
    {
        return $this->belongsTo(KategoriAgenda::class, 'id_kategori_agenda');
    }
}
