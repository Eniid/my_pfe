<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('event.events');
    }

    public function show(Event $event){
        return view('event.event');
    }

    public function create(){
        return view('event.new');
    }

    public function edit(){
        return view('event.new');
    }


}
