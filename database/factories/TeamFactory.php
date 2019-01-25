<?php

use Faker\Generator as Faker;

$factory->define(App\Team::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameMale().' FC',
        'captain_id' => $faker->numberBetween($min = 1, $max = 20),
    ];
});
