<?php

use Faker\Generator as Faker;

$factory->define(App\Match::class, function (Faker $faker) {
    return [

        'date' => $faker->dateTime($max = 'now', $timezone = null),

        'team1_id' => $faker->numberBetween($min = 1, $max = 10),
        'team2_id' => $faker->numberBetween($min = 11, $max = 20),
        'score1_id' => $faker->numberBetween($min = 1, $max = 10),
        'score2_id' => $faker->numberBetween($min = 11, $max = 20),
        'field_id' => $faker->numberBetween($min = 1, $max = 20),

    ];
});
