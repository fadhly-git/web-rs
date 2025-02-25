<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Staff extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'id_staff';

    protected $fillable = [
        'id_user',
        'id_kategori_staff',
        'slug_staff',
        'nama_staff',
        'jabatan',
        'pendidikan',
        'expertise',
        'email',
        'telepon',
        'isi',
        'gambar',
        'status_staff',
        'keywords',
        'urutan'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'id_user');
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriStaff::class, 'id_kategori_staff');
    }
}
