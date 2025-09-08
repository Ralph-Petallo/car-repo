<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sampleController extends Controller
{
    public function practice(){
        return view("practice");
    }

    public function request(Request $request){
        $user = $request->validate([
            'username'=>'required|max:255',
            'password'=>'required|max:255'
        ]);

        return redirect()->back()->with('success',$user['username']);
    }
}
