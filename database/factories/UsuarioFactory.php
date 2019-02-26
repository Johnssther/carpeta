<?php

use Faker\Generator as Faker;
use App\Models\Usuario;


$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->lastName,
        'age' => $faker->randomFloat($nbMaxDecimals = 0, $min = 25, $max =35 ), // 48.8932,
        'direction' => $faker->address,
        
    ];
});  