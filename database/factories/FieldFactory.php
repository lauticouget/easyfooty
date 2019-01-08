<?php

use Faker\Generator as Faker;

$factory->define(App\Field::class, function (Faker $faker) {
    return [
        'location' => $faker->randomElement(['CABA', 'Escobar', 'Pilar', 'General Rodriguez', 'Marcos Paz', 'Cañuelas', 'San Vicente', 'La Plata', 'Ensenada', 'Berisso', 'Berazategui', 'Florencio Varela', 'Almirante Brown', 'Esteban Echeverria', 'Ezeiza', 'La Matanza', 'Merlo', 'Moreno', 'Jose C. Paz', 'Malvinas Argentinas', 'Tigre', 'San Fernando', 'San Isidro', 'Vicente Lopez', 'General San Martin', 'San Miguel', 'Hurlingham', 'Tres de Febrero', 'Ituzaingo', 'Moron', 'Presidente Peron', 'Lomas De Zamora', 'Quilmes', 'Avellaneda']),
        'adress' => $faker->streetAddress,
        'photopath' => $faker->imageUrl($width = 640, $height = 480),
        'user_id' => $faker->numberBetween($min = 1, $max = 20),
        'name' => 'Canchitas '.$faker->lastname(),
    ];
});
