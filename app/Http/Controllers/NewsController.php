<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita as News;
class NewsController
{

    protected $table = 'beritas';
    protected $primaryKey = 'id_berita';

    public function index()
    {
        $news = News::where('id_kategori', '!=', '1')->where('status_berita', 'PUBLISH')->get();
        return response()->json($news);
    }
    public function show($str)
    {
        $news = News::where('judul_berita', 'like', '%' . $str . '%')->get();
        $news = $news->toArray();
        return [
            'news' => $news
        ];
    }
    public function showApi($str)
    {
        $news = News::where('judul_berita', 'like', '%' . $str . '%')->get();
        return response()->json($news);
    }

    public function getAll() {
        $news = News::where('id_kategori', '!=', '1')->where('status_berita', 'PUBLISH')->get();
        return [
            'news' => $news
        ];
    }
}
