<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name'           => 'Enid',
            'email'          => 'enid-bc@hotmail.com',
            'house'          => 'ravenclaw',
            'wand_wood'      => 'Sicomore',
            'wand_inside'    => 'Something',
            'wand_length'    => '8',
            'password'       => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => 'RvlORzs8dyG8IYqssJGcuOY2F0vnjBy2PnHHTX2MoV7Hh6udjJd6hcTox3un',
        ]);

            User::create([
                'name'           => 'Miranda',
                'email'          => 'Miranda@hotmail.com',
                'house'          => 'ravenclaw',
                'wand_wood'      => 'Sicomore',
                'wand_inside'    => 'Something',
                'wand_length'    => '14',
                'password'       => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => 'RvlORzs8dyG8IYqssJGcuOY2F0vnjBy2PnHHTX2MoV7Hh6udjJd6hcTox3un',
            ]);

            User::create([
                'name'           => 'Cedric',
                'email'          => 'cedric@hotmail.com',
                'house'          => 'ravenclaw',
                'wand_wood'      => 'Sicomore',
                'wand_inside'    => 'Something',
                'wand_length'    => '12',
                'password'       => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => 'RvlORzs8dyG8IYqssJGcuOY2F0vnjBy2PnHHTX2MoV7Hh6udjJd6hcTox3un',
            ]);

            User::create([
                'name'           => 'Isa',
                'email'          => 'isa@hotmail.com',
                'house'          => 'slytherin',
                'wand_wood'      => 'Sicomore',
                'wand_inside'    => 'Something',
                'wand_length'    => '16',
                'password'       => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => 'RvlORzs8dyG8IYqssJGcuOY2F0vnjBy2PnHHTX2MoV7Hh6udjJd6hcTox3un',
            ]);

            User::create([
                'name'           => 'Lea',
                'email'          => 'lea@hotmail.com',
                'house'          => 'slytherin',
                'wand_wood'      => 'Sicomore',
                'wand_inside'    => 'Something',
                'wand_length'    => '7',
                'password'       => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => 'RvlORzs8dyG8IYqssJGcuOY2F0vnjBy2PnHHTX2MoV7Hh6udjJd6hcTox3un',
            ]);


            User::create([
                'name'           => 'Lucy',
                'email'          => 'lucy@hotmail.com',
                'house'          => 'gryffindor',
                'wand_wood'      => 'Sicomore',
                'wand_inside'    => 'Something',
                'wand_length'    => '7',
                'password'       => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => 'RvlORzs8dyG8IYqssJGcuOY2F0vnjBy2PnHHTX2MoV7Hh6udjJd6hcTox3un',
            ]);

            User::create([
                'name'           => 'Ellie',
                'email'          => 'ellie@hotmail.com',
                'house'          => 'gryffindor',
                'wand_wood'      => 'Sicomore',
                'wand_inside'    => 'Something',
                'wand_length'    => '7',
                'password'       => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => 'RvlORzs8dyG8IYqssJGcuOY2F0vnjBy2PnHHTX2MoV7Hh6udjJd6hcTox3un',
            ]);
    
            User::create([
                'name'           => 'Morgan',
                'email'          => 'morgan@hotmail.com',
                'house'          => 'hufflepuff',
                'wand_wood'      => 'Sicomore',
                'wand_inside'    => 'Something',
                'wand_length'    => '7',
                'password'       => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => 'RvlORzs8dyG8IYqssJGcuOY2F0vnjBy2PnHHTX2MoV7Hh6udjJd6hcTox3un',
            ]);

    
    
    
    

                







           //User::factory()->times(10)->create();



    }

}
