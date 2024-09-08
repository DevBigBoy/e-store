<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Store;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->words(2, true);

        return [
            'store_id' => Store::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->sentence(15),
            'image' => $this->faker->imageUrl(600, 600, 'products', true),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'compare_price' => $this->faker->optional()->randomFloat(2, 1, 1500),
            // 'options' => json_encode($this->faker->optional()->randomElements(['size' => 'M', 'color' => 'red'])), // JSON encoding the array
            'rating' => $this->faker->numberBetween(0, 5),
            'featured' => $this->faker->boolean(),
            'status' => $this->faker->randomElement(['active', 'draft', 'archvied']),
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ];
    }
}
