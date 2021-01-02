<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'comment' => $faker->sentence,
        'post_id'=>\App\Post::all()->random()
    ];
});
