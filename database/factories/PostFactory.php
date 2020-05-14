<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'title' => $faker->sentence,
        'excerpt'=> $faker->sentence,
        'price'=> $faker->numberBetween(1,200),
        'image'=> $faker->imageUrl(640,480,null,true,null,false),
        'body'=> $faker->paragraph,
    ];
});
