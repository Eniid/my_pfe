<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Follow;
use App\Models\Event_user;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function index(User $user){

        $user->loadCount('posts'); 
        $posts = Post::latest()->where('postable_type', 'App\Models\Topic')->where('user_id', $user->id)->with('postable')->take(10)->get();
        //$posts->load('postable');
        $posts->load(['postable' => function($query){
            $query->with(['categorie' => function($query){
                $query->with('forum');
            }]);
        }]);
        
        $parts = Event_user::latest()->where('user_id', $user->id)->with('event')->take(6)->get();
        $parts->load('event');

        $follows = Follow::where('user_id', $user->id)->with('following')->get();


        $user->isFollowedByMe = Follow::where('user_id', auth()->id())->where('following_id', $user->id)->exists();


        return view('profil.profil', compact('user', 'posts', 'parts', 'follows' ));
    }

    public function store_desc(User $user, Request $request){

        $user_desc =  $request->validate(
            [
                'desc' => 'required|min:4|max:200',
            ]
        );

        Auth::user() -> description = request('desc'); 
        Auth::user() -> save(); 




        return redirect('profil/'.$user->id);
    }

    public function store_info(Request $request){

        $validations = [];

        if($request->name){
            $validations['name']='min:4|max:10';
        }
        if($request->file('profil') && $request->file('profil')->isValid()){
            $validations['profil']='mimes:jpg,jpeg,png,gif|file|max:1120';
        }
        if($request->email){
            $validations['email']='min:4|max:200';
        }
        if($request->password){
            $validations['password']='min:4|confirmed';
        }

        $user_desc =  $request->validate(
            $validations
        );

        //Auth::user() -> img = request('desc'); 
        Auth::user() -> img = request('desc'); 
        if($request->name){
            Auth::user() -> name = request('name'); 
        }
        if($request->file('profil') && $request->file('profil')->isValid()){

            $fileName = urlencode($request->profil->getClientOriginalName());
            $fileNameFull = time() . '-' . $fileName;
            $path = 'img/profil/' . $fileNameFull;
            $request->profil->move('img/profil', $fileNameFull);


            Auth::user() -> img = $path; 
        }
        if($request->email){
            Auth::user() -> email = request('email'); 
        }
        if($request->password){
            Auth::user() -> password = Hash::make(request('email')); 
        }

        Auth::user() -> save(); 




        return redirect('profil/'.auth()->id());
    }

    public function edit(){
        //return view('event.new');
    }

    public function add_f(User $user){

        $part = new Follow(request()->validate(
            [
            ]
        )); 

        $part -> following_id = $user->id; 
        $part -> user_id = auth()->id(); ; 
        $part -> save();
        return redirect('profil/'.$user->id);

    }


    public function rem_f(User $user){

        $part = Follow::where('following_id', $user->id)->where('user_id', auth()->id())->first();
        $part -> delete();

        return redirect('profil/'.$user->id);

    }


}
