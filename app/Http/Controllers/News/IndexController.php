<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Configs;
use App\Http\Controllers\NewsController as News;
use App\Http\Controllers\MenuController as Menu;

class IndexController
{
    public function BeritaTerkini() {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->getAll();
        $configData = $configs->get(); 
        return Inertia::render('News/index', array_merge($configData, $newsData, $menuData));
    }

    public function GaleriKegiatan() {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show('galeri kegiatan');
        $configData = $configs->get(); 
        return Inertia::render('layout/index', array_merge($configData, $newsData, $menuData));
    }

}
