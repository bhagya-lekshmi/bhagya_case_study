<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::upsert([
            ['category_name' => 'Clothing'],
            ['category_name' => 'Grocery'],
            ['category_name' => 'Electronics'],

        ], ['category_name']);
           
    }
}
