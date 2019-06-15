<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'category_name' => $faker->word,
        'category_description' => $faker->text,
        'category_image' => $faker->word,
        'is_active' => $faker->boolean
    ];
});
