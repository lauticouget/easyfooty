<?php

use Faker\Generator as Faker;

$factory->define(App\Skill::class, function (Faker $faker) {
    return [
        'rated' => rand(1,5),
        'user_id' => $faker->numberBetween($min = 1, $max = 20),
    ];
});