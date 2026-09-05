<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                        'name' => $this->faker->word(),
            'headline' => $this->faker->sentence(),
            'bio' => $this->faker->paragraph(),
            'avatar' => $this->faker->imageUrl(),
            'social_links' => json_encode([
                'facebook' => $this->faker->url(),
                'twitter' => $this->faker->url(),
                'linkedin' => $this->faker->url(),
            ]),
        ];
    }
}
