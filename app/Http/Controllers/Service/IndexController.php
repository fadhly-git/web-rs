<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Configs;
use App\Http\Controllers\NewsController as News;
use App\Http\Controllers\MenuController as Menu;

class IndexController
{
    public function Doktor() {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show('Doktor');
        $configData = $configs->get(); 
        return Inertia::render('Service/Dokter', array_merge($configData, $newsData, $menuData));
    }

    public function Poliklinik() {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show('Poliklinik');
        $configData = $configs->get(); 
        return Inertia::render('Service/Poliklinik', array_merge($configData, $newsData, $menuData));
    }

    public function JadwalDokter() {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show('JadwalDokter');
        $configData = $configs->get(); 
        return Inertia::render('Service/JadwalDokter', array_merge($configData, $newsData, $menuData));
    }

    public function FasilitasUmum() {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show('FasilitasUmum');
        $configData = $configs->get(); 
        return Inertia::render('Service/FasilitasUmum', array_merge($configData, $newsData, $menuData));
    }
}
