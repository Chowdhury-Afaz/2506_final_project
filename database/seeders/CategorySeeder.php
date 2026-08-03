<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Vegetables',
                'slug' => 'vegetables',
                'image' => "demo/veg.png",
                'featured' => true,
                'status' => true,
                'parent' => null,
                'description' => 'Fresh and organic vegetables sourced from trusted farms.',
            ],

            [
                'name' => 'Fruits',
                'slug' => 'fruits',
                'image' => "demo/fruits.png",
                'featured' => true,
                'status' => true,
                'parent' => null,
                'description' => 'Fresh, delicious, and naturally grown fruits.',
            ],

            [
                'name' => 'Organic Products',
                'slug' => 'organic-products',
                'image' => "demo/organic.jpg",
                'featured' => true,
                'status' => true,
                'parent' => null,
                'description' => 'Healthy and natural organic products for everyday living.',
            ],

            [
                'name' => 'Dairy & Eggs',
                'slug' => 'dairy-eggs',
                'image' => null,
                'featured' => true,
                'status' => true,
                'parent' => null,
                'description' => 'Fresh dairy products and farm-fresh eggs.',
            ],

            [
                'name' => 'Herbs & Spices',
                'slug' => 'herbs-spices',
                'image' => null,
                'featured' => false,
                'status' => true,
                'parent' => null,
                'description' => 'Fresh herbs and flavorful spices for your kitchen.',
            ],

            [
                'name' => 'Nuts & Seeds',
                'slug' => 'nuts-seeds',
                'image' => null,
                'featured' => false,
                'status' => true,
                'parent' => null,
                'description' => 'Healthy and nutritious nuts and seeds.',
            ],

            [
                'name' => 'Honey & Natural Sweeteners',
                'slug' => 'honey-natural-sweeteners',
                'image' => null,
                'featured' => false,
                'status' => true,
                'parent' => null,
                'description' => 'Natural honey and healthy alternatives to refined sugar.',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}