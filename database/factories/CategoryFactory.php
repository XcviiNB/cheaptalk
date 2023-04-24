<?php

namespace Database\Factories;

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
        $categories = ['Comedy', 'Romance', 'Adventure'];
        shuffle($categories);
        return [
            'category'  => array_pop($categories),
            'remarks'   => fake()->sentence()
        ];
    }
}
