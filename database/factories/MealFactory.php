<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Meal;
use Faker\Generator as Faker;

$factory->define(Meal::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3, true),
        'photo' => 'https://loremflickr.com/320/240/food?random=' . ($faker->randomDigit + 1),
        'description' => $faker->paragraph,
        'quantity_in_stock' => $faker->randomDigit,
        'buy_price' => $faker->randomFloat(3, 2, 150),
        'sale_price' => $faker->randomFloat(3, 2, 250),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
