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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'yep, nope, maybe',
            'company' => $this->faker->company(),
            'location' => $this->faker->address(),
            'website' => $this->faker->url(),
            'desc' => $this->faker->paragraph(6),
        ];
    }
}
