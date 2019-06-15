<?php

use Faker\Generator as Faker;
use App\Price;
use App\Service;

$factory->define(Price::class, function (Faker $faker) {
    return [
        'service_id' => $faker->numberBetween($min = 1 , $max = 6),
        'location_id' => $faker->numberBetween($min = 1 , $max = 6),
        'amount' => $faker->numberBetween($min = 30 , $max = 80),
        'unit' => array_random(['kg','stain']),
        'min_load' => $faker->numberBetween($min = 5, $mad = 20)
    ];
});
