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

    public function service(){
        return view("services");
    }

    public function abouts(){
        return view("about");
    }

    public function contacts(){
        return view("contact");
    }

    public function blogs(){    
        return view("blog");
    }
}
