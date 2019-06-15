<?php

use Faker\Generator as Faker;

use App\StoreAddress;

$factory->define(StoreAddress::class, function (Faker $faker) {
    return [
        'location_id' => $faker->numberBetween($min = 1, $max = 6),
        'address' => $faker->address(),
        'pincode' => $faker->postcode(),
     ];
});
