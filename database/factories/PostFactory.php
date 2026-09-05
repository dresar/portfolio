<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                        'title' => $this->faker->sentence(5),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraphs(3, true),
            'image' => 'https://via.placeholder.com/640x480.png/' . $this->faker->hexcolor() . '?text=' . $this->faker->word(),
        ];
    }
}
