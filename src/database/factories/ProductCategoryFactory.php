<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class ProductCategoryFactory extends Factory
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
            'description' => $this->faker->sentence(),
            'slug' => $this->faker->unique()->slug(),
            'parent_id' => null, // or \App\Models\ProductCategory::factory() for nested categories
            'is_active' => $this->faker->boolean(),
            'sort_order' => $this->faker->numberBetween(0, 100),// Generates a random image URL
        ];
    }
}
