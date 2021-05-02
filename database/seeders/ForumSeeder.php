<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('forums')->insert([
            0 => [
                'name'          => 'Harry Potter',
                'slug'          => 'hp',
            ],
            1 => [
                'name'          => 'Between Us',
                'slug'          => 'bs',
            ],            
            2 => [
                'name'          => 'Role Play',
                'slug'          => 'rp',
            ],
        ]);
    }
}
