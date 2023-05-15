<?php

namespace Database\Seeders;

use App\Models\Wineyard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class WineyardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $wineyard = new Wineyard();
            $wineyard->name = $faker->word();
            $wineyard->description = $faker->sentence();

            $wineyard->save();
        }
    }
}
