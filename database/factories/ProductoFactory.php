<?php

use Faker\Generator as Faker;
use App\Models\Producto;


$factory->define(Producto::class, function (Faker $faker) {
    return [
        'producto' => $faker->name,
        'size' => $faker->name,
        'marca_id' => $faker->randomFloat($nbMaxDecimals = 0, $min = 0, $max = 50), // 48.8932,
        'modelo_id' => $faker->randomFloat($nbMaxDecimals = 0, $min = 0, $max = 50), // 48.8932,
        'fechaElaboracion' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'personaElaboro_id' => $faker->randomFloat($nbMaxDecimals = 0, $min = 0, $max = 50), // 48.8932,
        'estado' => $faker->randomFloat($nbMaxDecimals = 0, $min = 0, $max = 1), // 48.8932,
        'descripcion' => $faker->text($maxNbChars = 800)    
        
    ];

}); 


