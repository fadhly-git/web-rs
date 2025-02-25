<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kategori extends Model
{
    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'id_user',
        'bahasa',
        'slug_kategori',
        'nama_kategori',
        'urutan',
        'hits',
        'created_at',
        'updated_at',
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'id_user');
    }
}
