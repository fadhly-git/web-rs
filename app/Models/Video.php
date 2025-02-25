<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Video extends Model
{
    protected $table = 'videos';
    protected $primaryKey = 'id_video';

    protected $fillable = [
        'judul',
        'posisi',
        'keterangan',
        'video',
        'urutan',
        'bahasa',
        'gambar',
        'id_user'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'id_user');
    }
}
