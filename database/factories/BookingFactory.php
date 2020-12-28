<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use App\User;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [
        'booking_date' => $faker->date,
        'booking_time' => $faker->time,
        'number_of_seats' => $faker->randomDigitNotNull,
        'user_id' => User::get('id')->random(),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
