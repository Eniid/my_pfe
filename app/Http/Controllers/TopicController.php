<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Forum;
use App\Models\Topic;
use App\Models\Post;

class TopicController extends Controller
{
    public function show (Forum $forum, Categorie $categorie, Topic $topic){

        //$post->load('posts');

        $posts = Post::whereHasMorph(
            'postable',
            [Topic::class],
        )->get();


        return view('forums.categories.topics.topic', compact('categorie', 'forum', 'topic', 'posts'));
    }

    public function create(){
        return view('forums.categories.topics.new-topic');
    }
 







}
