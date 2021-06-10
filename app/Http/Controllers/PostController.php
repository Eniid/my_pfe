<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Forum;
use App\Models\Topic;
use App\Models\Like;
use App\Models\Event;
use App\Models\Post;
use Illuminate\Support\Str;


class PostController extends Controller
{
    
    public function editTopicPost(Forum $forum, Categorie $categorie, Post $post){


        return view('forums.categories.topics.topic-post-form', compact('categorie', 'forum', 'post'));

    }


    public function store(Forum $forum, Categorie $categorie, Topic $topic, Request $request){


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

        $topic_n = $topic->loadCount('posts')->posts_count; 
        $nb_post_page = 10; 
        $nb_page =ceil($topic_n/$nb_post_page);
            
            
        return redirect('/'.$forum->slug.'/'.$categorie->slug.'/'.$topic->slug.'?page='.$nb_page );
    }

    public function store_event(Event $event, Request $request){


        $post = new Post(request()->validate(
            [
                'body' => 'required|min:4',
            ]
        ));

        $post -> body = request('body'); 
        $post -> user_id = auth()->id(); 
        $post -> postable_id = $event->id; 
        $post -> postable_type = "App\Models\Event";
        $post -> save();
            
            
        return redirect('/events/'.$event->slug);
    }
 


    public function like(Forum $forum, Categorie $categorie, Topic $topic, Request $request){


        $like = new Like(request()->validate(
            [
                'post_id' => 'required',
            ]
        ));

        $like -> post_id = request('post_id'); 
        $like -> user_id = auth()->id(); 
        $like -> save();

        $topic_n = $topic->loadCount('posts')->posts_count; 
        $nb_post_page = 10; 
        $nb_page =ceil($topic_n/$nb_post_page);
              
            
        return redirect('/'.$forum->slug.'/'.$categorie->slug.'/'.$topic->slug);
    }

    public function unlike(Forum $forum, Categorie $categorie, Topic $topic, Request $request){


        $like = new Like(request()->validate(
            [
                'post_id' => 'required',
            ]
        ));

        //trouver la table qui
        $like = Like::where('post_id', request('post_id'))->where('user_id', auth()->id())->first();
        $like->delete();

            
            
        return redirect('/'.$forum->slug.'/'.$categorie->slug.'/'.$topic->slug);
    }


}
