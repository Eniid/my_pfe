<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Event_user;
use App\Models\User;
use Illuminate\Support\Str;





class EventController extends Controller
{

    public $search;


    public function index(){

        $events = Event::with('user')->latest()->get();

        $participations = Event_user::latest()->where('user_id', auth()->id())->with('event')->take(6)->get();


       // dd($participations);

        return view('event.events', compact('events', 'participations'));
    }



    
    public function show(Event $event){


        $event->load('event_user');        
        $event->event_user->load('user');        
        //$event->load('posts');
        $event->load(['posts' => function($query){
            $query->latest();
        }]);

        $event->posts->load(['user' => function($query){
            $query->withCount('posts');
        }]);


        $event->isAuthUserPart = $event->event_user->contains(function ($value, $key) {
            return $value->user_id === auth()->id();
        });

        $events = Event::latest()->take(4)->get();

        $participations = Event_user::latest()->where('user_id', auth()->id())->with('event')->take(6)->get();




        return view('event.event', compact('event', 'events', 'participations'));
    }



    public function create(){



        return view("/event.new");
    }


    public function store(Request $request){
        $event = new Event(request()->validate(
            [
                'name' => 'required|min:4|max:20',
                'desc' => 'required|min:4',
                'date' => 'required',
                'place' => 'required|min:4|max:20',
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



        $part = new Event_user();
        $part -> event_id = $event->id;
        $part -> user_id = auth()->id(); ; 
        $part -> save();

        $user = User::where('id', auth()->id())->first();
        $user-> house_point = $user-> house_point + 10; 
        $user -> save();

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
