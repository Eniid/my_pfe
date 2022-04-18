<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;


class OwlsController extends Controller
{
        
    public function show(){

        $users = User::latest()->take(10)->get();
        $current_user = User::latest()->first();


        return view('owls.owls', compact('users', 'current_user'));
    }
}
