<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'index'])->name('index');
Route::get('cars', [AdminController::class, 'cars'])->name('cars');
Route::get('services', [AdminController::class, 'service'])->name('services');

