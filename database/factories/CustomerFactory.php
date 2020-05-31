<?php

/** @var Factory $factory */

use App\Customer;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => 'images/default-avatar.png',
        'email' => $faker->unique()->safeEmail,
        'age' => $faker->numberBetween(12,60),
        'address' => $faker->address
    ];
});
