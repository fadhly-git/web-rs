<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';
    protected $primaryKey = 'id_banner';
    protected $fillable = ['gambar'];
    public $timestamps = true;
}
