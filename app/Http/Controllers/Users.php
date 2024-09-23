<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index(Request $request){
        $name = $request->input("name");
        return view('users', ['name' => $name]);
    }

    public function loginData(Request $request){
        $username = $request->input("username");
        return "form is here " . $username;
    }
}
