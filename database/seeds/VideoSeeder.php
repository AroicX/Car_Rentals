<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Video');
        for ($i=0; $i <= 20 ; $i++) { 
            
        DB::table('videos')->insert([
            'user_id' => $faker->randomNumber(1),
            'category_id' => $faker->randomNumber(1),
            'video_title' => $faker->name,
            'video' => $faker->imageUrl($width = 500, $height = 500),
            'description' => $faker->paragraph(5),
            
          ]);
        }
    
    }
}
