<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'index'])->name('index');
Route::get('cars', [AdminController::class, 'cars'])->name('cars');
Route::get('services', [AdminController::class, 'service'])->name('services');
Route::get('contact', [AdminController::class,'contacts'])->name('contact');

Route::get('dashboard', function() {
    return view('admin-folder.dashboard');
})->name('admin-dashboard');

Route::get('table', function(){
    return view('admin-folder.table');
})->name('admin-table');  

