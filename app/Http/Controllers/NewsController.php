<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function show() {
        $news = News::all();
        return view('pages.news', ["news"=>$news]);
    }
}
