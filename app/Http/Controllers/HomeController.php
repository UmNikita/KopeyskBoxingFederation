<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function show() {
        $news = News::orderBy('id', 'desc')->limit(3)->get();
        return view('pages.home', ["news"=>$news]);
    }
}
