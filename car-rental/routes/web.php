<?php

use App\Http\Controllers\sampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('practice');
});


Route::get('request', [sampleController::class,'request'])->name('request');
