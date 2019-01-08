<?php

use Faker\Generator as Faker;

$factory->define(App\Team::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameMale().' FC',
        'goalkeeper_id' => $faker->numberBetween($min = 1, $max = 4),
        'player1_id' => $faker->numberBetween($min = 5, $max = 8),
        'player2_id' => $faker->numberBetween($min = 9, $max = 12),
        'player3_id' => $faker->numberBetween($min = 13, $max = 16),
        'captain_id' => $faker->numberBetween($min = 17, $max = 20),
    ];
});
