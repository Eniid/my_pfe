<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index(){
        return view('event.events');
    }

    public function show(Event $event){


        return view('event.event');
    }

    public function create(){

 


        return view("/event.new");
    }

    public function store(Request $request){
        $event = new Event(request()->validate(
            [
                'name' => 'required|min:4',
                'desc' => 'required|min:4',
                'date' => 'required',
                'place' => 'required',
                'private_desc' => 'required|min:4',
            ]
        ));

        $slug = Str::of(request('name'))->slug('-'); 
        
        $event -> name = request('name'); 
        $event -> slug = $slug; 
        $event -> description = request('desc'); 
        $event -> part_description = request('private_desc'); 
        $event -> date = request('date'); 
        $event -> place = request('place'); 
        $event -> link = request('private_desc'); 
        $event -> user_id = auth()->id(); ; 
        $event -> save();


        
        return redirect('/events');
    }

    public function edit(){
        return view('event.new');
    }


}
