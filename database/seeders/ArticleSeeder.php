<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $categories = DB::table('categories')->pluck('id');

        foreach (range(1, 15) as $index) {
            $title = "Article Title $index";
            $content = "<p>This is the content of Article $index. It can contain rich text.</p>";
            $author = "Author Name";
            $date = now();
            $category = $categories->random();
            $tags = "Tag1, Tag2, Tag3";
            $slug = Str::slug($title); // Generate slug from title

            DB::table('articles')->insert([
                'title' => $title,
                'content' => $content,
                'author' => $author,
                'date' => $date,
                'category_id' => $category,
                'tags' => $tags,
                'slug' => $slug, // Insert the generated slug
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}