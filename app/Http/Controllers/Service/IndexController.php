<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Configs;
use App\Http\Controllers\NewsController as News;
use App\Http\Controllers\Service\JadwalDokterController as Jadwal;
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
        return Inertia::render('layout/index', array_merge($configData, $newsData, $menuData));
    }

    public function Poliklinik() {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show('Poliklinik');
        $configData = $configs->get(); 
        return Inertia::render('layout/index', array_merge($configData, $newsData, $menuData));
    }

    public function JadwalDokter() {
        $configs = new Configs();
        $menu = new Menu();
        $jadwal = new Jadwal();
        $dokterJaga = $jadwal->DokterJaga();
        $jadwalData = $jadwal->index();
        $menuData = $menu->getall();
        $configData = $configs->get(); 
        return Inertia::render('Service/JadwalDokter', array_merge($configData, $jadwalData, $menuData, $dokterJaga));
    }

    public function FasilitasUmum() {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show('fasilitas umum');
        $configData = $configs->get(); 
        return Inertia::render('layout/index', array_merge($configData, $newsData, $menuData));
    }

    public function PelayanUnitKhusus()  {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show('pelayanan unit khusus');
        $configData = $configs->get(); 
        return Inertia::render('layout/index', array_merge($configData, $newsData, $menuData));
    }

    public function PelayananPenunjang()  {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show('pelayanan penunjang');
        $configData = $configs->get(); 
        return Inertia::render('layout/index', array_merge($configData, $newsData, $menuData));
    }

    public function RawatInap() {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show('rawat inap');
        $configData = $configs->get(); 
        return Inertia::render('layout/index', array_merge($configData, $newsData, $menuData));
    }

    public function MedicalCheckUp()  {
        $configs = new Configs();
        $news = new News();
        $menu = new Menu();
        $menuData = $menu->getall();
        $newsData = $news->show('medical check up');
        $configData = $configs->get(); 
        return Inertia::render('layout/index', array_merge($configData, $newsData, $menuData));
    }
}
