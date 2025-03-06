<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Banners;
use App\Http\Controllers\Configs;
use App\Http\Controllers\MenuController;

class Home
{
    public function index()
    {
        $configs = new Configs();
        $banners = new Banners();
        $menu = new MenuController();
        $menuData = $menu->getall();
        $bannersData = $banners->index();
        $configData = $configs->get(); 
        return Inertia::render('Dashboard', array_merge($bannersData, $configData, $menuData));
    }
}
