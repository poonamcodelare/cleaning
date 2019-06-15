<?php

use Faker\Generator as Faker;

$factory->define(\App\Location::class, function (Faker $faker) {
    return [
        'name' => $faker->state(),
        // 'location_pincode' => $faker->randomNumber($nbDigit = 6,$strict = true)
    ];
});
