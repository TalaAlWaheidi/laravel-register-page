<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $req){
        $name=request('username');
        $email=request('email');
        $password=request('password');
        $phone=request('phone');

        $validate=$req -> validate([
            "email" => "required|email",
            "password" => "required|min:8|max:16",
            "username" => "required",
            "phone" => "required|digits:14"
        ]);

        $user=array();
        $user=['username','email','phone','password'];

        return view('user',["user"=>$user,

        ]);
    }

    public function user(){
        return view('form');
    }
}
