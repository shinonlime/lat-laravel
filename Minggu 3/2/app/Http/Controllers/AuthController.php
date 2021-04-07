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

        return "<h1>Selamat Datang $first $last</h1>
        <h2>Terima kasih telah bergabung di SanberBook. Social Media kita bersama!</h2>";
    }
}
