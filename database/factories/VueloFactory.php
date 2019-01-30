<?php

use Faker\Generator as Faker;

$factory->define(App\Vuelo::class, function (Faker $faker) {
    $ub1 = App\Ubicacion::inRandomOrder()->first()->id;
    $ub2 = App\Ubicacion::inRandomOrder()->first()->id;
    while($ub1 == $ub2){
      $ub2= App\Ubicacion::inRandomOrder()->first()->id;
    }
    return [
        'codigo' => $faker->ean8,
        'fecha' => $faker->dateTimeBetween($startDate = 'now',$endDate = '+1 months'),
        'hora' => $faker->time,
        'ubicacion_origen_id' => $ub1,
        'ubicacion_destino_id' => $ub2,
        'updated_at' => null,
    ];
});
