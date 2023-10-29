<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            ['category' => 'Technology', 'slug' => 'technology', 'description' => 'The latest in tech news.', 'image' => 'technology.jpg'],
            ['category' => 'Travel', 'slug' => 'travel', 'description' => 'Explore the world.', 'image' => 'travel.jpg'],
            ['category' => 'Food', 'slug' => 'food', 'description' => 'Discover delicious recipes.', 'image' => 'food.jpg'],
            ['category' => 'Sports', 'slug' => 'sports', 'description' => 'Stay updated on sports events.', 'image' => 'sports.jpg'],
            ['category' => 'Health', 'slug' => 'health', 'description' => 'Tips for a healthy life.', 'image' => 'health.jpg'],
            ['category' => 'Science', 'slug' => 'science', 'description' => 'Exploring the wonders of science.', 'image' => 'science.jpg'],
            ['category' => 'Business', 'slug' => 'business', 'description' => 'Stay informed on business trends.', 'image' => 'business.jpg'],
            ['category' => 'Fashion', 'slug' => 'fashion', 'description' => 'The latest fashion trends.', 'image' => 'fashion.jpg'],
            ['category' => 'Entertainment', 'slug' => 'entertainment', 'description' => 'Entertainment news and updates.', 'image' => 'entertainment.jpg'],
            ['category' => 'Art', 'slug' => 'art', 'description' => 'Exploring the world of art.', 'image' => 'art.jpg'],
            ['category' => 'Music', 'slug' => 'music', 'description' => 'The world of music.', 'image' => 'music.jpg'],
            ['category' => 'Automotive', 'slug' => 'automotive', 'description' => 'The latest in the automotive industry.', 'image' => 'automotive.jpg'],
            ['category' => 'Education', 'slug' => 'education', 'description' => 'Educational news and insights.', 'image' => 'education.jpg'],
            ['category' => 'Environment', 'slug' => 'environment', 'description' => 'Environmental awareness and issues.', 'image' => 'environment.jpg'],
            ['category' => 'Politics', 'slug' => 'politics', 'description' => 'The world of politics.', 'image' => 'politics.jpg'],
            // Tambahkan kategori lainnya di sini
        ];

        DB::table('categories')->insert($categories);
    }
}