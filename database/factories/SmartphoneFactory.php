<?php

namespace Database\Factories;

use App\Models\Smartphone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Smartphone>
 */
class SmartphoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Samsung Galaxy',
                'Xiaomi Redmi',
                'Oppo Reno',
                'Vivo Y Series',
                'Realme Narzo',
                'Infinix Note',
            ]),
            'price' => fake()->numberBetween(1000000, 20000000),
            'ram' => fake()->randomElement([4, 6, 8, 12]),
            'storage' => fake()->randomElement([64, 128, 256, 512]),
            'release_year' => fake()->year(),
        ];
    }
}
