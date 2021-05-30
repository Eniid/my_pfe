<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;


class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Categorie::create([
            'name'           => 'Movies',
            'slug'           => 'movies',
            'description'    => 'Harry Potter, Fantastic Beast, lets talks about the amazing movies the wizarding world has to offer',
            'forum_id'      => '1',
        ]);


        Categorie::create([
            'name'           => 'Books',
            'slug'           => 'books',
            'description'    => 'Harry Potter, Fantastic Beast, lets talks about the amazing movies the wizarding world has to offer',
            'forum_id'      => '1',
        ]);


        Categorie::create([
            'name'           => 'Games',
            'slug'           => 'games',
            'description'    => 'Harry Potter, Fantastic Beast, lets talks about the amazing movies the wizarding world has to offer',
            'forum_id'      => '1',
        ]);


        Categorie::create([
            'name'           => 'Fan Made Content',
            'slug'           => 'fan-made-content',
            'description'    => 'Harry Potter, Fantastic Beast, lets talks about the amazing movies the wizarding world has to offer',
            'forum_id'      => '1',
        ]);

        Categorie::create([
            'name'           => 'Other',
            'slug'           => 'fan-made-content',
            'description'    => 'Harry Potter, Fantastic Beast, lets talks about the amazing movies the wizarding world has to offer',
            'forum_id'      => '1',
        ]);


        Categorie::create([
            'name'           => 'Introduce yourself',
            'slug'           => 'introduce-yourself',
            'description'    => 'You want to let us know you a little better ? Come and introduce yourself!',
            'forum_id'      => '2',
        ]);


        Categorie::create([
            'name'           => 'Three Broomsticks',
            'slug'           => 'three-broomsticks',
            'description'    => 'Here you can talk about everything you want !! ',
            'forum_id'      => '2',
        ]);

        Categorie::create([
            'name'           => 'Oranazation',
            'slug'           => 'fan-made-content',
            'description'    => 'Create your caracter, difnine your relationship, looke for a role play partner! ',
            'forum_id'      => '3',
        ]);

        Categorie::create([
            'name'           => 'Diagon Alley',
            'slug'           => 'diagon-alley',
            'description'    => 'Create your caracter, difnine your relationship, looke for a role play partner! ',
            'forum_id'      => '3',
        ]);


        Categorie::create([
            'name'           => 'Great Hall',
            'slug'           => 'diagon-alley',
            'description'    => 'Create your caracter, difnine your relationship, looke for a role play partner! ',
            'forum_id'      => '3',
        ]);
        

        Categorie::create([
            'name'           => 'Headmaster Office',
            'slug'           => 'headmaster-office',
            'description'    => 'Create your caracter, difnine your relationship, looke for a role play partner! ',
            'forum_id'      => '3',
        ]);

        Categorie::create([
            'name'           => 'Classrooms',
            'slug'           => 'classrooms',
            'description'    => 'Create your caracter, difnine your relationship, looke for a role play partner! ',
            'forum_id'      => '3',
        ]);

        Categorie::create([
            'name'           => 'Ravenclaw Common Room',
            'slug'           => 'ravenclaw-common-room',
            'description'    => 'Create your caracter, difnine your relationship, looke for a role play partner! ',
            'forum_id'      => '3',
        ]);

        Categorie::create([
            'name'           => 'Slytherin Common Room',
            'slug'           => 'slytherin-common-room',
            'description'    => 'Create your caracter, difnine your relationship, looke for a role play partner! ',
            'forum_id'      => '3',
        ]);

        Categorie::create([
            'name'           => 'Hufflepuff Common Room',
            'slug'           => 'hufflepuff-common-room',
            'description'    => 'Create your caracter, difnine your relationship, looke for a role play partner! ',
            'forum_id'      => '3',
        ]);

        Categorie::create([
            'name'           => 'Gryffindor Common Room',
            'slug'           => 'gryffindor-common-room',
            'description'    => 'Create your caracter, difnine your relationship, looke for a role play partner! ',
            'forum_id'      => '3',
        ]);

        




        //Categorie::factory()->times(10)->create();
    }
}
