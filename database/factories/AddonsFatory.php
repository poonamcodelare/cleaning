<?php

use Faker\Generator as Faker;
use App\Addon;

$factory->define(Addon::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'price' => $faker->numberBetween($min = 5 , $max = 10),
        'unit' => array_random(['kg','stain']),
       
    ];
});
