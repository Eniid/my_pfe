<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use App\Models\Forum;
use App\Models\Post;
use Illuminate\Http\Request;

class ForumController extends Controller
{


    public function show(Forum $forum){

        $forum->load('categories'); 
        $forum->categories->load('topics');
        $forum->categories->loadCount('topics');

        
        $forum->categories->map(function($cat){

            $cat->topics->map(function($topic){
                $topic->latestPost = Post::where('postable_id', $topic->id)
                    ->where('postable_type', 'App\Models\Topic')
                    ->orderByDesc('created_at')
                    ->with('user')->first();
                return $topic;
            });
            $cat->topics->loadCount('posts');
            $cat->topic = $cat->topics->sortByDesc(function($topic){
                return $topic->latestPost->created_at;
            })->values()->first();
        });
        

        //dd($forum->categories);


       //$categories = Categorie::where('forum_id', 1)->get();
        //Je vais devoir le récupere avec les topic, les post de chaque topic et l'auteur du derner message... (HELP!)

        return view('forums.forum', compact('forum'));
    }
}
