<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Configs;
use App\Http\Controllers\NewsController as News;
use App\Http\Controllers\MenuController as Menu;

class IndexController
{
    public function KontakKami() {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show('kontak kami');
        $configData = $configs->get(); 
        return Inertia::render('layout/index', array_merge($configData, $newsData, $menuData));
    }

    public function KritikSaran() {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show('kritik saran');
        $configData = $configs->get(); 
        return Inertia::render('Contact/KritikSaran', array_merge($configData, $newsData, $menuData));
    }

    public function SurveyKepuasan() {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show('survey kepuasan');
        $configData = $configs->get(); 
        return Inertia::render('layout/index', array_merge($configData, $newsData, $menuData));
    }
}
