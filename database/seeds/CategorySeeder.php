<?php


use App\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create('App\Category');
    	for ($i=0; $i <= 20 ; $i++) { 

    		DB::table('categories')->insert([
                'name' => $faker->name,
    			'url' => $faker->imageUrl($width = 500, $height = 500),
    			'description' => $faker->paragraph(1),

    		]);
    	}
    }
}
