<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Banners;

class Temp
{
    public function index()
    {
        $banners = new Banners();
        $data = $banners->index();
        return Inertia::render('Temp', $data);
    }
}
