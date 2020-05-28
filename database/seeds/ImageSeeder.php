<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('App\Image');
    	for ($i=0; $i <= 20 ; $i++) { 

    		DB::table('images')->insert([
    			'user_id' => $faker->randomNumber(1),
    		    'category_id' => $faker->randomNumber(1),
                'image_title' => $faker->name,
    			'image' => $faker->imageUrl($width = 500, $height = 500),
    			'description' => $faker->paragraph(5),

    		]);
    	}
    
    }
}
