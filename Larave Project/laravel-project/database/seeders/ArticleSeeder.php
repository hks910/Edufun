<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Generate 10 fake articles
        foreach (range(1, 6) as $index) {
            Article::create([
                'title' => $faker->sentence, // Generate a random title
                'content' => $faker->paragraph, // Generate random paragraph content
                'writer_id' => $faker->numberBetween(1, 6), // Randomly assign a writer_id
                'image' => "images/course/{$index}.jpg", // Use a structured image path
                'created_at' => $faker->dateTimeThisYear(), // Random date within the current year
                'updated_at' => now(), // Current timestamp for updated_at
            ]);
        }
    }
}
