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
            'name' => 'Snack',
            'active' => 1,
        ]);
        Category::query()->create([
            'name' => 'Beverage',
            'active' => 1,
        ]);
        Category::query()->create([
            'name' => 'Main Course',
            'active' => 1,
        ]);
    }
}
