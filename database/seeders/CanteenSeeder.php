<?php

namespace Database\Seeders;

use App\Models\Canteen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class CanteenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $canteen = new Canteen();
            $canteen->name = $faker->word();
            $canteen->address = $faker->word();
            $canteen->town = $faker->city();
            $canteen->province = $faker->countryCode();
            $canteen->region = $faker->word();
            $canteen->nation = $faker->word();
            $canteen->telephon = $faker->word();
            $canteen->email = $faker->email();

            $canteen->save();
        }
    }
}
