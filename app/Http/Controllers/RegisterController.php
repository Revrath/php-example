<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
class RegisterController extends Controller
{
    public function create(){
        return view("auth.register");
    }
    public function store(){
        request()->validate([
            "name"=> ['required'],
            'password'=> ['required', Password::min(8)->letters()],
            ]);
    }

}
