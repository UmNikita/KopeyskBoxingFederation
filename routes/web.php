<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CoachesController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'show']);
Route::get('/about', [AboutController::class, 'show']);
Route::get('/couches', [CoachesController::class, 'show']);
Route::get('/documents', [DocumentsController::class, 'show']);
Route::get('/news', [NewsController::class, 'show']);
Route::get('/new/{id}', [NewsController::class, 'showNew']);
Route::get('/partners', [PartnersController::class, 'show']);