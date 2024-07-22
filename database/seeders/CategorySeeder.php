<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::query()->create([
            'name' => 'Makanan',
            'active' => 1,
        ]);
        Category::query()->create([
            'name' => 'Minuman',
            'active' => 0,
        ]);
        Category::query()->create([
            'name' => 'Materials',
            'active' => 1,
        ]);
    }
}
