<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['bug report','feature request','improvement'];

        foreach ($categories as $category) {
            Category::create([
                'name'=>$category
            ]);
        }
    }
}
