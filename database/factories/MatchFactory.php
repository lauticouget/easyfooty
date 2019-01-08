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
        'guest1_id' => $faker->numberBetween($min = 1, $max = 2),
        'guest2_id' => $faker->numberBetween($min = 3, $max = 4),
        'guest3_id' => $faker->numberBetween($min = 5, $max = 6),
        'guest4_id' => $faker->numberBetween($min = 7, $max = 8),
        'guest5_id' => $faker->numberBetween($min = 9, $max = 10),
        'guest6_id' => $faker->numberBetween($min = 11, $max = 12),
        'guest7_id' => $faker->numberBetween($min = 13, $max = 14),
        'guest8_id' => $faker->numberBetween($min = 15, $max = 17),
        'guest9_id' => $faker->numberBetween($min = 18, $max = 20),
    ];
});