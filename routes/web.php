<?php

use Illuminate\Support\Facades\Route;

Route::get(config('menu.home.route', '/'), function () {
    return view('pages.home');
});
Route::get(config('menu.about.route', '/about'), function () {
    return view('pages.about');
});
Route::get(config('menu.couches.route', '/couches'), function () {
    return view('pages.coaches');
});
Route::get(config('menu.documents.route', '/documents'), function () {
    return view('pages.documents');
});
Route::get(config('menu.news.route', '/news'), function () {
    return view('pages.news');
});
Route::get(config('menu.partners.route', '/partners'), function () {
    return view('pages.partners');
});