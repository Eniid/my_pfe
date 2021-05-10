<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->text,
            'user_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6]),
            'postable_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6]),
            'postable_type' => $this->faker->randomElement(['topic', 'event']),
        ];
    }
}
