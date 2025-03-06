<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;

class Configs
{
    protected $table = 'configs';
    protected $primaryKey = 'id_conf';

    public function index(){
        $configs = Config::latest()->first();
        return response()->json($configs);
    }

    public function get() {
        $configs = Config::latest()->first()->toArray();
        return [
            'configs' => $configs
        ];
    }
}
