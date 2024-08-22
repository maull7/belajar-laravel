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
            'name' => 'web design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'data science',
            'slug' => 'data-science'
        ]);
        Category::create([
            'name' => 'malching learning',
            'slug' => 'ml-'
        ]);
        Category::create([
            'name' => 'robotika',
            'slug' => 'robotika---'
        ]);
        Category::create([
            'name' => 'bencana alam',
            'slug' => 'bencana-alam'
        ]);
        Category::create([
            'name' => 'teknologi',
            'slug' => '--teknologi-'
        ]);
        Category::create([
            'name' => 'apa itu coding',
            'slug' => 'apa-itu-coding'
        ]);
    }
}
