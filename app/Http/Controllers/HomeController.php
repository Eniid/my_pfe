<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Post;
use App\Models\user;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = Event::latest()->take(5)->get();
        //$latestEvents = $event->sortByDesc('created_at')->;
        $posts = Post::latest()->where('postable_type', 'App\Models\Topic')->take(10)->get();
        $posts->load('postable');
        $posts->load(['postable' => function($query){
            $query->with(['categorie' => function($query){
                $query->with('forum');
             }]);
         }]);
        $posts->load(['user' => function($query){
            $query->withCount('posts');
         }]);


        $new_users = User::latest()->take(10)->get();

        $events = Event::latest()->take(10)->get();


        //dd($posts);

        return view('home', compact('events', 'posts', 'new_users'));
    }

    public function tp()
    {
        return view('t&p');
    }
}
