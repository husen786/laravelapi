<?php

use Faker\Generator as Faker;
use App\Model\Product;
$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
    	'product_id' => function(){
    		return Product::all()->random();	
    	},
        'customer' => $faker->name,
        'review' => $faker->word,
        'star' => $faker->numberBetween(0,5)

    ];
});
