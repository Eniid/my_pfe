<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{


    public function show(Forum $forum){

        $forum -> $forum->load('categories'); 


       //$categories = Categorie::where('forum_id', 1)->get();
        //Je vais devoir le récupere avec les topic, les post de chaque topic et l'auteur du derner message... (HELP!)

        return view('forums.forum1', compact('forum'));
    }
}
