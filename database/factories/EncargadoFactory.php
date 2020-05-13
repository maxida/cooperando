<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Encargado;
use Faker\Generator as Faker;

$factory->define(Encargado::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'dni' => $faker->word,
        'direccion' => $faker->word,
        'telefono' => $faker->word,
        'foto' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
