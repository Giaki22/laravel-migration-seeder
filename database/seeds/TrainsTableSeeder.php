<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure = $faker->dateTimeBetween(date('Y-m-d'), '+1 week');
            $newTrain->arrival = $faker->dateTimeBetween(date('Y-m-d'), '+1 week');
            $newTrain->train_code = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newTrain->n_wagons = rand(1, 20);
            $newTrain->on_time = $faker->boolean();
            $newTrain->is_cancelled = $faker->boolean();
            $newTrain -> save();
        }
    }
}
