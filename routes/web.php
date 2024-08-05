<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('gallery', GalleryController::class);
Route::resource('blog', BlogController::class);
Route::resource('contact', ContactController::class);
