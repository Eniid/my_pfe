<?php

namespace Database\Factories;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class TopicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Topic::class;

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
            'title' => $title, 
            'slug' => $slug,
            'user_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8]),
            'categorie_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),

        ];
    }
}
