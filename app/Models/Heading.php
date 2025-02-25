<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Heading extends Model
{
    protected $table = 'headings';
    protected $primaryKey = 'id_heading';

    protected $fillable = [
        'id_user',
        'judul_heading',
        'keterangan',
        'gambar',
        'halaman'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'id_user');
    }
}
