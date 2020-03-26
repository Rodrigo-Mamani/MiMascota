<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;



$factory->define(Post::class, function (Faker $faker) {
    $usuarios=User::all();
    $datos=$usuarios->all();
    $imprimir=array_rand($datos);
    return [
        'image'=>$faker->image,
        'text'=>$faker->unique()->sentence(20),
        'user_id'=>$imprimir,
    ];
});
