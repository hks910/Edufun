<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;
use Faker\Factory as Faker;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Define the specialties
        $specialties = ['Data Science', 'Network Security'];

        // Generate 10 fake writers
        foreach (range(1, 6) as $index) {
            Writer::create([
                'writerName' => $faker->name, // Generate a random name
                'image' => 'images/writers/' . $index . '.jpg', // Store only relative path in DB// Use your custom image path
                'speciality' => $faker->randomElement($specialties), // Randomly choose a specialty
            ]);
        }
    }
}
