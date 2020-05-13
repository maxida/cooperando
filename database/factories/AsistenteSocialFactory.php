<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AsistenteSocial;
use Faker\Generator as Faker;

$factory->define(AsistenteSocial::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'dni' => $faker->word,
        'matricula' => $faker->word,
        'direccion' => $faker->word,
        'telefono' => $faker->word,
        'foto' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
