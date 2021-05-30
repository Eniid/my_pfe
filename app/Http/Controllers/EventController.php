<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Event_user;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index(){

        $events = Event::all();




        return view('event.events', compact('events'));
    }





    
    public function show(Event $event){


        $event->load('event_user');        
        $event->load('posts');
        $event->posts->load(['user' => function($query){
            $query->withCount('posts');
         }]);




        return view('event.event', compact('event'));
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
        $event -> desc = request('desc'); 
        $event -> private_desc = request('private_desc'); 
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

    public function participation(Event $event,Request $request){


        $part = new Event_user(request()->validate(
            [
                'event_id' => 'required',
            ]
        )); 

        $part -> event_id = request('event_id'); 
        $part -> user_id = auth()->id(); ; 
        $part -> save();
        

        return redirect('/events/'.$event->slug);
    }

    public function leave(Event $event,Request $request){


        $part = new Event_user(request()->validate(
            [
                'event_id' => 'required',
            ]
        ));

        $part = Event_user::where('event_id', request('event_id'))->where('user_id', auth()->id())->first();
        $part -> delete();
        

        return redirect('/events/'.$event->slug);
    }


}
