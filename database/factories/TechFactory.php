<?php

namespace Database\Factories;

use App\Models\Tech;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tech>
 */
class TechFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->sentence(1, true);

        return [
            'name' => $name,
            'slug' => Tech::generateSlug($name),
            'description' => fake()->sentences(3, true),
            'price' => fake()->randomFloat(2,50, 999),
            'stock' => mt_rand(1, 100),
        ];
    }
}
