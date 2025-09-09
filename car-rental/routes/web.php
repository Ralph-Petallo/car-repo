<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'index'])->name('index');
Route::get('cars', [AdminController::class, 'cars'])->name('cars');
Route::get('services', [AdminController::class, 'service'])->name('services');
Route::get('about', [AdminController::class, 'abouts'])->name('about');
Route::get('contact', [AdminController::class,'contacts'])->name('contact');
Route::get('blog', [AdminController::class,'blogs'])->name('blog');

