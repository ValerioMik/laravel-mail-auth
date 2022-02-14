<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Videogame;
use Faker\Generator as Faker;

$factory->define(Videogame::class, function (Faker $faker) {
    return [
        'titolo' => $faker->words(3,true),
        'sottotitolo' => $faker->words(3,true),
        'rating' => $faker-> numberBetween(100,10000),
    ];
});
