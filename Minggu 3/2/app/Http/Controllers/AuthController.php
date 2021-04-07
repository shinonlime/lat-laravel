<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }

    public function welcome(Request $request){
        $first = $request["first"];
        $last = $request["last"];

        return view('welcome', ['firstname' => $first, 'lastname' => $last]);
    }
}
