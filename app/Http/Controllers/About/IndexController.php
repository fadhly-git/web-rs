<?php

namespace App\Http\Controllers\About;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Configs;
use App\Http\Controllers\NewsController as News;
use App\Http\Controllers\MenuController as Menu;

class IndexController
{
    public function InformasiUmum()
    {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show('informasi umum');
        $configData = $configs->get(); 
        return Inertia::render('layout/index', array_merge($configData, $newsData, $menuData));
    }

    public function Sejarah()
    {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $configData = $configs->get(); 
        $newsData = $news->show('sejarah');
        return Inertia::render('layout/index', array_merge($configData, $newsData, $menuData));
    }

    public function TimKami() {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $configData = $configs->get(); 
        $newsData = $news->show('tim-kami');
        return Inertia::render('About/TimKami', array_merge($configData, $newsData, $menuData));
    }

    public function VisiMisi() {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $configData = $configs->get(); 
        $newsData = $news->show('visi misi');
        return Inertia::render('layout/index', array_merge($configData, $newsData, $menuData));
    }
}
