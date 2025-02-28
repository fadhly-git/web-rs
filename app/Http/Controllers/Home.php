<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Banners;

class Home
{
    public function index()
    {
        $banners = new Banners();
        $data = $banners->index();
        return Inertia::render('Dashboard', $data);
    }
}
