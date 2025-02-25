<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Download extends Model
{
    protected $table = 'downloads';
    protected $primaryKey = 'id_download'; 
    public $timestamps = false;

    protected $fillable = [
        'id_download',
        'id_kategori_download',
        'id_user',
        'judul_download',
        'jenis_download',
        'isi',
        'gambar',
        'website',
        'hits',
        'tanggal',
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'id_user');
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriDownload::class, 'id_kategori_download');
    }
}
