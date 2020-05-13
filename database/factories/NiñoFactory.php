<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Niño;
use Faker\Generator as Faker;

$factory->define(Niño::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'direccion' => $faker->word,
        'telefono' => $faker->word,
        'dni' => $faker->word,
        'peso' => $faker->word,
        'talla' => $faker->word,
        'foto' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
