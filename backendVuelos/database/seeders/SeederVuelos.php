<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SeederVuelos extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $value) {
            DB::table('Vuelo')->insert([
                'origen' => $faker->country,
                'destino' => $faker->country,
                'precio' => $faker->biasedNumberBetween(50,300),
            ]);
        }
    }
}
