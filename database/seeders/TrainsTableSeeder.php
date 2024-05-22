<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 1; $i <= 10; $i++){
            $train = new Train();
            $train->operator = $faker->randomElement(['Trenitalia', 'Italo', 'Trenord']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->regexify('[A-Z0-9]{8}');
            $train->wagons = $faker->numberBetween(4, 9);
            $train->in_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->save();
        }
    }
}
