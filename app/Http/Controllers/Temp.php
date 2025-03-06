<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Banners;
use App\Http\Controllers\Configs;

class Temp
{
    public function index()
    {
        $configs = new Configs();
        $banners = new Banners();
        $bannersData = $banners->index();
        $configData = $configs->index(); 
        return Inertia::render('Temp', array_merge($bannersData, $configData));
    }
}
