<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CoachesController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnersController;

Route::get(config('menu.home.route', '/'), function () {
    return view('pages.home');
});
Route::get(config('menu.about.route', '/about'), [AboutController::class, 'show']);
Route::get(config('menu.couches.route', '/couches'), [CoachesController::class, 'show']);
Route::get(config('menu.documents.route', '/documents'), [DocumentsController::class, 'show']);
Route::get(config('menu.news.route', '/news'), [NewsController::class, 'show']);
Route::get(config('menu.partners.route', '/partners'), [PartnersController::class, 'show']);