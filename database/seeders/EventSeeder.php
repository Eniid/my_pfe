<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;


class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'name'           => 'Harry Potter Maraton',
            'slug'           => 'harry-potter-maraton',
            'desc'           => 'A very good opportunity for us to gather on a conversation and watch the movies together !',
            'private_desc'   => 'Zomm meeting room for the movie night : https://us05web.zoom.us/j/4666069737?pwd=Z0wydGk5a1ViTjE1ZUlHU0tWS3UwUT09',
            'date'           => '2021-05-30',
            'place'          => 'Zoom',
            'user_id'          => '1',
        ]);

        Event::create([
            'name'           => 'Game Night',
            'slug'           => 'game-night',
            'desc'           => 'We will play a lot of games together all night!!!',
            'private_desc'   => 'Discord serveur : https://us05web.zoom.us/j/4666069737?pwd=Z0wydGk5a1ViTjE1ZUlHU0tWS3UwUT09',
            'date'           => '2021-05-30',
            'place'          => 'discord',
            'user_id'         => '2',
        ]);

        Event::create([
            'name'           => 'Drink together',
            'slug'           => 'drink-together',
            'desc'           => 'Were all going to meet in London, to meet in person and have a drink!! :D',
            'private_desc'   => 'Adresse',
            'date'           => '2021-05-30',
            'place'          => 'London',
            'user_id'          => '3',
        ]);

        Event::create([
            'name'           => 'Harry Potter Maraton',
            'slug'           => 'harry-potter-maraton',
            'desc'           => 'A very good opportunity for us to gather on a conversation and watch the movies together !',
            'private_desc'   => 'Discord meeting room for the movie night : https://us05web.zoom.us/j/4666069737?pwd=Z0wydGk5a1ViTjE1ZUlHU0tWS3UwUT09',
            'date'           => '2021-05-30',
            'place'          => 'discord',
            'user_id'          => '4',
        ]);

        Event::create([
            'name'           => 'RPG Night',
            'slug'           => 'rpg-night',
            'desc'           => 'Leave the magic with us all night! (should last for about 3h)',
            'private_desc'   => 'Discord meeting room for the movie night : https://us05web.zoom.us/j/4666069737?pwd=Z0wydGk5a1ViTjE1ZUlHU0tWS3UwUT09',
            'date'           => '2021-05-30',
            'place'          => 'discord',
            'user_id'          => '5',
        ]);


    }
}
