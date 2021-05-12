<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Forum;
use App\Models\Topic;
use App\Models\Post;
use Illuminate\Support\Str;


class PostController extends Controller
{
    
    public function editTopicPost(Forum $forum, Categorie $categorie, Post $post){


        return view('forums.categories.topics.topic-post-form', compact('categorie', 'forum'));

            }


}
