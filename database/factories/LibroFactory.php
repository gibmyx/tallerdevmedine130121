<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Propuesta;
use Faker\Generator as Faker;

$factory->define(\App\Libro::class, function (Faker $faker) {
    return [
        "uuid"                  => $faker->uuid,
        "nombre"                => $faker->text(255),
        "autor"                 => $faker->name,
        "edicion"               => $faker->text(255),
        "editorial"             => $faker->text(255),
        "fecha_publicacion"     => $faker->date()
    ];
});
