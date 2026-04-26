<?php

namespace Database\Seeders;

use App\Models\Smartphone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SmartphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Smartphone::factory()->count(100)->create();
    }
}
