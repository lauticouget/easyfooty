<?php

use Faker\Generator as Faker;

$factory->define(App\Score::class, function (Faker $faker) {
    return [
        'goals' => $faker->numberBetween($min = 0, $max = 5),
        'team_id' => $faker->numberBetween($min = 1, $max = 20),
    ];
});
