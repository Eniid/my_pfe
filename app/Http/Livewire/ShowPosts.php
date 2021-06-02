<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;


class ShowPosts extends Component
{
    public $readyToLoad = false;

    public function loadPosts()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => $this->readyToLoad
                ? Post::all()
                : [],
        ]);
    }
}


