<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'details' => $faker->word,
        'price' => $faker->numberBetween(100,1000),
        'stcok'=> $faker->randomDigit,
        'discount' => $faker->numberBetween(2,30),

    ];
});