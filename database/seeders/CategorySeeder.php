<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Kesehatan Ginjal',
            'slug' => 'kesehatan-ginjal',
            'color' => 'red',
        ]);

        Category::create([
            'name' => 'Kesehatan Kulit',
            'slug' => 'kesehatan-kulit',
            'color' => 'blue',
        ]);

        Category::create([
            'name' => 'Kesehatan Paru',
            'slug' => 'kesehatan-paru',
            'color' => 'yellow',
        ]);
    }
}
