<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    

    public function index(){


        return view('forums.topic-list');
    }


    public function create(){


        return view('forums.new-topic');
    }

}
