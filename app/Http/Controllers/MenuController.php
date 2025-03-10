<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;

class MenuController
{
    protected $table = 'menus';
    protected $primaryKey = 'id_menu';

    public function index()
    {
        $menu = Menu::where('status', 1)->get()->toArray();
        return response()->json($menu);
    }

    public function getall(){
        $menu = Menu::where('status', 1)->get()->toArray();
        return [
            'menu' => $menu
        ];
    }
}
