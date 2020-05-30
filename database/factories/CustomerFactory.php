<?php

/** @var Factory $factory */

use App\Customer;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => $faker->imageUrl(100,100),
        'email' => $faker->unique()->safeEmail,
        'age' => $faker->numberBetween(12,80),
        'address' => $faker->address
    ];
});
