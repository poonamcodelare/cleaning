<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'service_name' => $faker->word,
        'service_image' => $faker->word,
        'service_description' => $faker->text,
        'service_price' => $faker->randomFloat($nbMaxDecimals = 2,$min = 20, $max = 100),
        'service_discount' => $faker->numberBetween($min = 5, $max = 20),
        'is_active' => $faker->boolean  
    ];
});
