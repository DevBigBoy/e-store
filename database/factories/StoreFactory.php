<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->words(3, true); // Generate a name using Faker

        return [
            'name' => $name,
            'slug' => Str::slug($name), // Generate a slug from the name
            'description' => $this->faker->paragraph(), // Generate a random paragraph for description
            'logo_image' => $this->faker->optional()->imageUrl(640, 480, 'logo', true), // Generate a random logo image URL
            'cover_image' => $this->faker->optional()->imageUrl(1280, 720, 'cover', true), // Generate a random cover image URL
            'status' => $this->faker->randomElement(['active', 'inactive']), // Randomly set status to 'active' or 'inactive'
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
