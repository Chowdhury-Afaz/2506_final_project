<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [

            // Vegetables
            [
                'category_id' => 1,
                'title' => 'Fresh Organic Tomato',
                'slug' => 'fresh-organic-tomato',
                'description' => 'Fresh and juicy organic tomatoes, carefully selected from trusted local farms. Perfect for salads, curries, sauces, and everyday cooking.',
                'short_description' => 'Fresh and juicy organic tomatoes for everyday cooking.',
                'price' => 120.00,
                'selling_price' => 99.00,
                'image' => "demo/ig1.png",
                'gallery_image' => null,
                'meta_title' => 'Buy Fresh Organic Tomato Online',
                'meta_description' => 'Buy fresh and organic tomatoes online at the best price.',
                'meta_keywords' => 'organic tomato, fresh tomato, buy tomato online',
            ],

            [
                'category_id' => 1,
                'title' => 'Fresh Corn',
                'slug' => 'fresh-Corn',
                'description' => 'Crunchy, fresh, and naturally sweet carrots packed with essential nutrients and vitamins.',
                'short_description' => 'Fresh, crunchy, and naturally sweet carrots.',
                'price' => 100.00,
                'selling_price' => 85.00,
                'image' => "demo/cron.png",
                'gallery_image' => null,
                'meta_title' => 'Fresh Carrot Online',
                'meta_description' => 'Order fresh and healthy carrots online for your family.',
                'meta_keywords' => 'fresh carrot, organic carrot, buy carrot online',
            ],

            [
                'category_id' => 1,
                'title' => 'Fresh Broccoli',
                'slug' => 'fresh-broccoli',
                'description' => 'Fresh green broccoli harvested at the right time to preserve its natural taste and nutrients.',
                'short_description' => 'Fresh and nutritious green broccoli.',
                'price' => 180.00,
                'selling_price' => 150.00,
                'image' => "demo/Lettuce.png",
                'gallery_image' => null,
                'meta_title' => 'Buy Fresh Broccoli Online',
                'meta_description' => 'Order fresh and nutritious broccoli online at an affordable price.',
                'meta_keywords' => 'fresh broccoli, organic broccoli, broccoli online',
            ],

            // Fruits
            [
                'category_id' => 2,
                'title' => 'Fresh Red Apple',
                'slug' => 'fresh-red-apple',
                'description' => 'Crisp, juicy, and delicious red apples selected for their excellent quality and natural sweetness.',
                'short_description' => 'Crisp, juicy, and delicious fresh red apples.',
                'price' => 320.00,
                'selling_price' => 280.00,
                'image' => "demo/Apple.png",
                'gallery_image' => null,
                'meta_title' => 'Buy Fresh Red Apple Online',
                'meta_description' => 'Buy fresh, juicy, and delicious red apples online.',
                'meta_keywords' => 'red apple, fresh apple, buy apple online',
            ],

            [
                'category_id' => 2,
                'title' => 'Fresh Mango',
                'slug' => 'fresh-mango',
                'description' => 'Naturally sweet and delicious seasonal mangoes, carefully selected for premium taste and quality.',
                'short_description' => 'Sweet, juicy, and delicious seasonal mangoes.',
                'price' => 250.00,
                'selling_price' => 220.00,
                'image' => "demo/fresh-fruit.png",
                'gallery_image' => null,
                'meta_title' => 'Fresh Seasonal Mango Online',
                'meta_description' => 'Order fresh and naturally sweet seasonal mangoes online.',
                'meta_keywords' => 'fresh mango, seasonal mango, organic mango',
            ],

            [
                'category_id' => 2,
                'title' => 'Fresh Banana',
                'slug' => 'fresh-banana',
                'description' => 'Naturally sweet and nutritious bananas, perfect for breakfast, snacks, and smoothies.',
                'short_description' => 'Naturally sweet and nutritious fresh bananas.',
                'price' => 80.00,
                'selling_price' => 70.00,
                'image' =>null,
                'gallery_image' => null,
                'meta_title' => 'Buy Fresh Banana Online',
                'meta_description' => 'Buy fresh and nutritious bananas online at a great price.',
                'meta_keywords' => 'fresh banana, organic banana, banana online',
            ],

            // Organic Products
            [
                'category_id' => 3,
                'title' => 'Organic Brown Rice',
                'slug' => 'organic-brown-rice',
                'description' => 'Premium quality organic brown rice, naturally grown and carefully processed to preserve its nutritional value.',
                'short_description' => 'Healthy and nutritious organic brown rice.',
                'price' => 180.00,
                'selling_price' => 160.00,
                'image' => null,
                'gallery_image' => null,
                'meta_title' => 'Buy Organic Brown Rice Online',
                'meta_description' => 'Shop premium quality organic brown rice online.',
                'meta_keywords' => 'organic brown rice, healthy rice, brown rice online',
            ],

            [
                'category_id' => 3,
                'title' => 'Organic Red Lentils',
                'slug' => 'organic-red-lentils',
                'description' => 'High-quality organic red lentils packed with plant-based protein and essential nutrients.',
                'short_description' => 'Nutritious and protein-rich organic red lentils.',
                'price' => 160.00,
                'selling_price' => 140.00,
                'image' => null,
                'gallery_image' => null,
                'meta_title' => 'Organic Red Lentils Online',
                'meta_description' => 'Buy healthy and nutritious organic red lentils online.',
                'meta_keywords' => 'organic lentils, red lentils, organic dal',
            ],

            // Dairy & Eggs
            [
                'category_id' => 4,
                'title' => 'Fresh Farm Eggs',
                'slug' => 'fresh-farm-eggs',
                'description' => 'Fresh farm eggs sourced from trusted suppliers for a healthy and nutritious daily diet.',
                'short_description' => 'Fresh and nutritious farm eggs.',
                'price' => 150.00,
                'selling_price' => 135.00,
                'image' => null,
                'gallery_image' => null,
                'meta_title' => 'Buy Fresh Farm Eggs Online',
                'meta_description' => 'Order fresh and nutritious farm eggs online.',
                'meta_keywords' => 'fresh eggs, farm eggs, organic eggs',
            ],

            [
                'category_id' => 4,
                'title' => 'Fresh Cow Milk',
                'slug' => 'fresh-cow-milk',
                'description' => 'Fresh and nutritious cow milk sourced from trusted dairy farms.',
                'short_description' => 'Fresh and nutritious farm-fresh cow milk.',
                'price' => 100.00,
                'selling_price' => 90.00,
                'image' => null,
                'gallery_image' => null,
                'meta_title' => 'Fresh Cow Milk Online',
                'meta_description' => 'Buy fresh and nutritious cow milk online.',
                'meta_keywords' => 'fresh cow milk, organic milk, farm fresh milk',
            ],

            // Herbs & Spices
            [
                'category_id' => 5,
                'title' => 'Organic Turmeric Powder',
                'slug' => 'organic-turmeric-powder',
                'description' => 'Pure and aromatic organic turmeric powder made from carefully selected turmeric roots.',
                'short_description' => 'Pure and aromatic organic turmeric powder.',
                'price' => 220.00,
                'selling_price' => 190.00,
                'image' => null,
                'gallery_image' => null,
                'meta_title' => 'Buy Organic Turmeric Powder Online',
                'meta_description' => 'Shop pure and natural organic turmeric powder online.',
                'meta_keywords' => 'organic turmeric, turmeric powder, natural spices',
            ],

            [
                'category_id' => 5,
                'title' => 'Fresh Coriander',
                'slug' => 'fresh-coriander',
                'description' => 'Fresh and aromatic coriander leaves, perfect for adding flavor and freshness to your meals.',
                'short_description' => 'Fresh and aromatic coriander leaves.',
                'price' => 40.00,
                'selling_price' => 30.00,
                'image' => null,
                'gallery_image' => null,
                'meta_title' => 'Fresh Coriander Online',
                'meta_description' => 'Buy fresh and aromatic coriander leaves online.',
                'meta_keywords' => 'fresh coriander, coriander leaves, organic herbs',
            ],

            // Nuts & Seeds
            [
                'category_id' => 6,
                'title' => 'Premium Almonds',
                'slug' => 'premium-almonds',
                'description' => 'Premium quality almonds packed with healthy fats, protein, vitamins, and essential nutrients.',
                'short_description' => 'Premium quality almonds for a healthy lifestyle.',
                'price' => 950.00,
                'selling_price' => 850.00,
                'image' => null,
                'gallery_image' => null,
                'meta_title' => 'Buy Premium Almonds Online',
                'meta_description' => 'Shop premium quality and nutritious almonds online.',
                'meta_keywords' => 'premium almonds, healthy nuts, buy almonds online',
            ],

            [
                'category_id' => 6,
                'title' => 'Organic Chia Seeds',
                'slug' => 'organic-chia-seeds',
                'description' => 'Natural organic chia seeds rich in fiber, omega-3 fatty acids, and essential nutrients.',
                'short_description' => 'Healthy and nutritious organic chia seeds.',
                'price' => 650.00,
                'selling_price' => 580.00,
                'image' => null,
                'gallery_image' => null,
                'meta_title' => 'Buy Organic Chia Seeds Online',
                'meta_description' => 'Buy healthy and nutritious organic chia seeds online.',
                'meta_keywords' => 'organic chia seeds, healthy seeds, chia seeds online',
            ],

            // Honey & Natural Sweeteners
            [
                'category_id' => 7,
                'title' => 'Pure Natural Honey',
                'slug' => 'pure-natural-honey',
                'description' => 'Pure and natural honey collected from trusted sources with a rich taste and natural sweetness.',
                'short_description' => 'Pure and natural honey for a healthy lifestyle.',
                'price' => 750.00,
                'selling_price' => 680.00,
                'image' => null,
                'gallery_image' => null,
                'meta_title' => 'Buy Pure Natural Honey Online',
                'meta_description' => 'Shop pure and natural honey online for a healthy lifestyle.',
                'meta_keywords' => 'pure honey, natural honey, organic honey',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}