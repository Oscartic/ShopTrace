<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Wholesaler::class, function (Faker $faker) {
    return [
        'name'=> $faker->company,
        'phone' => $faker->phoneNumber,
        'address' => $faker->streetAddress,
        'address2' => $faker->country
    ];
});
