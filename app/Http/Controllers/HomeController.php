<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Event_user;
use App\Models\Post;
use App\Models\Topic;
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
    public function index(Request $request)
    {


        $event_filter = $request->events??'all';
        $post_filter = $request->posts??'all';

        if($event_filter === 'all') {
            $events = Event::latest()->take(5)->get();
        } else {
            $events = Event_user::latest()->where('user_id', auth()->id())->with('event')->take(6)->get();

        }

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


        return view('home', compact('events', 'posts', 'new_users', 'event_filter', 'post_filter'));
    }



    
    public function search(Request $request)
    {
        $searched = request('search');
        $events = Event::latest()->take(5)->get();
        //$latestEvents = $event->sortByDesc('created_at')->;
        $posts = Post::latest()->where('postable_type', 'App\Models\Topic')->where('body', 'like', '%' .$searched.'%')->get();
        $topics = Topic::latest()->where('title', 'like', '%' .$searched.'%')->get();


        $posts->load('postable');
        $posts->load(['postable' => function($query){
            $query->with(['categorie' => function($query){
                $query->with('forum');
             }]);
         }]);
        $posts->load(['user' => function($query){
            $query->withCount('posts');
         }]);


        $new_users = User::latest()->where('name', 'like', '%' .$searched.'%')->take(10)->get();

        $events = Event::latest()->where('name', 'like', '%' .$searched.'%')->take(10)->get();


        //dd($posts);

        return view('search', compact('events', 'posts', 'new_users', 'searched'));
    }







    public function tp()
    {
        return view('t&p');
    }
}
