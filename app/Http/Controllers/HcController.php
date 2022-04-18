<?php

namespace App\Http\Controllers;
use App\Models\user;

use Illuminate\Http\Request;

class HcController extends Controller
{
    
    public function show(){
        $users = User::latest()->take(10)->get();


        return view('hc.hc', compact('users'));
    }


}
