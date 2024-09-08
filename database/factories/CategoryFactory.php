<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->word; // Ensure unique name
        $slug = Str::slug($name . '-' . $this->faker->unique()->numberBetween(1, 1000));



        return [
            'parent_id' => $this->faker->optional()->randomElement(Category::pluck('id')->toArray()),
            'name' => $name,
            'slug' => $slug,
            'description' => $this->faker->optional()->text,
            'image' => $this->faker->optional()->imageUrl(),
            'status' => $this->faker->randomElement(['active', 'archived']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
