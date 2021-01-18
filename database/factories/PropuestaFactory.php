<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Propuesta;
use Faker\Generator as Faker;

$factory->define(Propuesta::class, function (Faker $faker) {
    return [
        "nombre"                => $faker->name,
        "apellido"              => $faker->lastName,
        "edad"                  => random_int(25, 50),
        "saldo"                 => random_int(500, 5000),
        "sexo"                  => "hombre",
        "cantidad_prestamo"     => random_int(20000, 50000),
        "debe_factura"          => 'no',
        "estado"                => 'pendiente',
    ];
});
