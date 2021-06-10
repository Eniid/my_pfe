<?php

namespace App\Http\Controllers;
use App\Models\Forum;
use App\Models\Categorie;
use App\Models\Topic;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategorieController extends Controller
{
    

    public function show(Forum $forum, Categorie $categorie){

        $categorie->load('topics');
        $categorie->topics->load('user'); 
        $categorie->topics->loadCount('posts'); 
        // $categorie->topics->load(['posts' => function($query){
        //     $query->latestPost()->with('user');
        //  }]);
        //$categorie->topics->load('post_l'); 

        $categorie->topics->map(function( $topic ){
            $topic->latestPost = Post::where('postable_id', $topic->id)->where('postable_type', 'App\Models\Topic')->orderByDesc('created_at')->with('user')->first();
            return $topic;
        });

        $categorie->topics = $categorie->topics->sortByDesc(function($topic){
            return $topic->latestPost->created_at;
        })->values();

       // dd($categorie->topics);

        return view('forums.categories.categorie', compact('categorie', 'forum'));
    }


    public function create(){

        return view('forums.new-topic');
    }

    public function store(Request $request){

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
        $topic -> categorie_id = 1; 
        $topic -> save();

        $post = new Post(request()->validate(
            [
                'body' => 'required|min:4',
            ]
        ));
        
        $post -> body = request('body'); 
        $post -> user_id = auth()->id(); //! Comment récupérer l'id de l'utilisateur co ?
        $post -> postable_id = $topic->id; //? ça marché comme ça ? 
        $post -> postable_type = "topic";
        $post -> save();
            
            


        return redirect("/ww");
    }

}
