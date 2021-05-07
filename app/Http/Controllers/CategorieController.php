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


        return view('forums.show-cat', compact('categorie'));
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
        $post -> user_id = 1; //! Comment récupérer l'id de l'utilisateur co ?
        $post -> postable_id = $topic->id; //? ça marché comme ça ? 
        $post -> postable_type = "topic";
        $post -> save();
            
            


        return redirect("/ww");
    }

}
