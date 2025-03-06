<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Configs;
use App\Http\Controllers\NewsController as News;
use App\Http\Controllers\MenuController as Menu;

class MainController
{
    public function index($parameter)
    {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show($parameter);
        $configData = $configs->get(); 
        return Inertia::render('Article/Index', array_merge($configData, $newsData, $menuData));
    }
}
