<?php

use Faker\Generator as Faker;
use App\Models\Modelo;


$factory->define(Modelo::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'active' => $faker->randomFloat($nbMaxDecimals = 0, $min = 0, $max = 1), // 48.8932,
        
    ];

}); 
