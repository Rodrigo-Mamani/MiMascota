<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->sentence(1,2),
        'img' => $faker->image,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => 'wilson123',
    ];
});
