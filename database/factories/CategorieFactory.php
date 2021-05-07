<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategorieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categorie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(3);
        $slug = Str::of($title)->slug('-'); 

        return [
            'name' => $title, 
            'slug' => $slug,
            'description' => $this->faker->text,
            'forum_id' => $this->faker->randomElement([1, 2, 3]),
        ];
    }
}
