<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("index");
    }

    public function cars(){
        return view("cars");
    }

    public function contacts(){
        return view("contact");
    }
}
