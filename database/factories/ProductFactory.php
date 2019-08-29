<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'           => $faker->word,
        'desciption'    => $faker->paragraph,
        'price'          => $faker->numberBetween(10,10000),
        'discount'       => $faker->numberBetween(3.00,30.00),
        'stock'          => $faker->numberBetween(0,100),
    ];
});
