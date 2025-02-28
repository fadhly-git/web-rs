<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'configs';
    protected $primaryKey = 'id_conf';
    protected $fillable = [
        'name_web',
        'logo',
        'favicon',
        'email',
        'phone',
        'address',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'sambutan',
        'pesan_1',
        'icon_1',
        'pesan_2',
        'icon_2',
        'pesan_3',
        'icon_3',
        'pesan_4',
        'icon_4',
        'sambutan_2',
        'layanan_medis',
        'gambar_layanan_medis',
        'layanan_penunjang',
        'gambar_layanan_penunjang',
        'iklan',
        'news',
        'footer',
        'copy_right',
    ];
}
