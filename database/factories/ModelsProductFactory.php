<?php
use App\Models\Category;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'ean' => $faker->ean8,
        'name' => $faker->userName,
        'description' => $faker->paragraph,
        'short_desc' => $faker->sentence,
        'dimension' => $faker->creditCardExpirationDateString,
        'img' => $faker->imageUrl($width = 640, $height = 480),
        'brand_name' => $faker->company,
        'warranty' => $faker->randomElement($array = array (1,2,3,4,5,6,7,8,9,10,11,12)),
        'category_id' => Category::all()->random()->id
    ];
});
