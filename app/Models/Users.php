<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'password',
        'akses_level',
        'gambar',
        'created_at',
        'updated_at',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
