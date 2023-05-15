<?php

namespace Database\Seeders;

use App\Models\Wine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class WineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $wine = new Wine();
            $wine->name = $faker->word();
            $wine->year = $faker->year();
            $wine->winemaker = $faker->word();
            $wine->color = $faker->word();
            $wine->type = $faker->word();
            $wine->volume = $faker->randomDigit();
            $wine->extract = $faker->randomDigit();
            $wine->acidity = $faker->randomDigit();

            $wine->save();
        }
    }
}
