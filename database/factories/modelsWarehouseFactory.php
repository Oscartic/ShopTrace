<?php

use Faker\Generator as Faker;

$factory->define(App\models\Warehouse::class, function (Faker $faker) {
    return [
        'sku_wholesalers' => $faker->swiftBicNumber,
        'sku_myshop' => $faker->numerify('MS###'),
        'stock' => $faker->randomDigitNotNull,
        'amount' =>
        'product_id'
        'wholesaler_id'
        'invoice'
    ];
});
