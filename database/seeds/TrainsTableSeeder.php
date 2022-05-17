<?php

use App\Trains;
use Illuminate\Database\Seeder;
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
        //
        for ($i = 0; $i < 50; $i++) {
            $newTran = new Trains();
            $newTran->Agency = $faker->title();
            $newTran->departure_station = $faker->city();
            $newTran->arrival_station = $faker->city();
            $newTran->departure_time = $faker->date();
            $newTran->Arrival_time = $faker->date();
            $newTran->train_code = $faker->randomNumber(1, 5);
            $newTran->number_of_carriages = $faker->numberBetween(1, 20);
            $newTran->in_time = $faker->boolean();
            $newTran->deleted = $faker->boolean();
            $newTran->price = $faker->numberBetween(1, 2000);
            $newTran->save();
        }
    }
}
