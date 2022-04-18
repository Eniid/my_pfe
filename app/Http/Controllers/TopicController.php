<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Forum;
use App\Models\Topic;
use App\Models\Post;
use Illuminate\Support\Str;


class TopicController extends Controller
{
    public function show (Forum $forum, Categorie $categorie, Topic $topic){


        $posts = Post::with('likes')
        ->with(['user' => function($query){
            $query->withCount('posts');
         }])
        ->where('postable_id', $topic->id)
        ->where('postable_type', 'App\Models\Topic')
        ->paginate(10);


        $messagesByPage = 10; 


        return view('forums.categories.topics.topic', compact('categorie', 'forum', 'topic', 'posts', 'messagesByPage'));

    }



    
    public function create(Forum $forum, Categorie $categorie){

        return view('forums.categories.topics.topic-post-form', compact('categorie', 'forum'));
    }
 

    public function store(Forum $forum, Categorie $categorie, Request $request){


        //Valisation
        $topic = new Topic(request()->validate(
            [
                'title' => 'required|min:4',
                //'img' => '', // chose à vérifier sur une image
            ]
        ));

        
        $slug = Str::of(request('title'))->slug('-'); 

        $topic -> title = request('title'); 
        $topic -> slug = $slug; 
        //$topic -> imgs = request('img'); 
        $topic -> user_id = auth()->id(); 
        $topic -> categorie_id = $categorie->id; 
        $topic -> save();

        $post = new Post(request()->validate(
            [
                'body' => 'required|min:4',
            ]
        ));
        
        $post -> body = request('body'); 
        $post -> user_id = auth()->id(); 
        $post -> postable_id = $topic->id; 
        $post -> postable_type = "App\Models\Topic";
        $post -> save();
            
            


        return redirect('/'.$forum->slug.'/'.$categorie->slug);
    }
 


 





}
