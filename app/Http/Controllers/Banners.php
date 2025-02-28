<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class Banners
{
    protected $table = 'banners';
    protected $primaryKey = 'id_banner';

    public function index()
    {
        $banners = Banner::all()->toArray();
        return [
            'banners' => $banners
        ];
    } 

    public function show(){
        $data = $this->index();
    }
}
