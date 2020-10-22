<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function generatePlateNum($length)
    {
        $key = '';
        $keys = array_merge(range(0, 9), range('a-z', 'A-Z'));
        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
        return $key;
    }

    public function run()
    {
        $faker = Faker::create('App\Car');

        for ($i = 0; $i <= 200; $i++) {
            $types = ['Toyota', 'Honda', 'Audi', 'Hyundia', 'Kia', 'Nissan'];
            $models = ['regular', 'special'];

            $selectType = array_rand($types);
            $selectModel = array_rand($models);
            $case = null;

            switch ($types[$selectType]) {
                case 'Toyota':
                    $case = 'T';
                    break;
                case 'Honda':
                    $case = 'H';
                    break;
                case 'Audi':
                    $case = 'A';
                    break;
                case 'Kia':
                    $case = 'K';
                    break;

                    break;
            }

            DB::table('cars')->insert([
                'client_id' => 1,
                'car_type' => $types[$selectType],
                'car_model' => $case . $faker->randomNumber(3),
                'car_name' => $faker->name(),
                'plate_num' => $this->generatePlateNum(8),
                'hire_cost' => $faker->randomNumber(5),
                'capacity' => 4,
                'car_color' => '#202245',
            ]);
        }
    }
}
