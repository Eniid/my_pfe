<?php

namespace Database\Seeders;

use App\Models\Topic;
use App\Models\Post;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::factory()->times(10)->create();

        Topic::all()->each(function ($topic) {
            for ($i = 1; $i <= rand(1, 15); $i++) {
                $topic->posts()->save(Post::factory()->make());
            }
        });
    }

    
}
