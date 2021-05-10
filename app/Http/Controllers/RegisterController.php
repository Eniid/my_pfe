<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    public function setHouse(){
        
        
        return view('login.register_house');
    }

    public function setWand(){
        
        return view('login.register_house');
        
    }
}
