<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvent;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create(['name' => 'Realme', 'origin' => 'China', 'category' => 'Elektronik']);
        Brand::create(['name' => 'Samsung', 'origin' => 'Korea', 'category' => 'Elektronik']);
        Brand::create(['name' => 'Xiaomi', 'origin' => 'China', 'category' => 'Elektronik']);
        Brand::create(['name' => 'Infinix', 'origin' => 'China', 'category' => 'Elektronik']);
        Brand::create(['name' => 'Vivo', 'origin' => 'China', 'category' => 'Elektronik']);
        Brand::create(['name' => 'Oppo', 'origin' => 'China', 'category' => 'Elektronik']);
    }
}