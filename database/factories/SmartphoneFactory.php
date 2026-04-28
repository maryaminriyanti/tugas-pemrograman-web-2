<?php

namespace Database\Factories;

use App\Models\Brand;
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
        $brands = Brand::pluck('id', 'name');

        $name = fake()->randomElement([
            'Realme Narzo',
            'Samsung Galaxy',
            'Xiaomi Redmi',
            'Infinix Note',
            'Vivo Y Series',
            'Oppo Reno',
        ]);

        $brandName = explode(' ', $name)[0];

        return [
            'name' => $name,
            'price' => fake()->numberBetween(1000000, 20000000),
            'ram' => fake()->randomElement([2, 3, 4, 6, 8, 12, 16]),
            'storage' => fake()->randomElement([32, 64, 128, 256, 512, 1]),
            'release_year' => fake()->year(),
            'brand_id' => $brands[$brandName] ?? 1,
        ];
    }
}
