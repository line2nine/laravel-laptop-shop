<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => Str::random(5),
        'detail' => Str::random(10),
        'price' => $faker->numberBetween(100, 250),
        'image' => 'images/default-product.jpg',
        'category_id' => $faker->numberBetween(1, 3)
    ];
});
