<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('profil.profil');
    }

    public function edit(){
        //return view('event.new');
    }
}
