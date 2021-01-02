<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Share;
use Faker\Generator as Faker;

$factory->define(Share::class, function (Faker $faker) {
    $shareables = [
        App\Post::class,
        App\Video::class,
    ];

    $shareableType = $faker->randomElement($shareables);

    $shareable = factory($shareableType)->create();

    return [
        'url' => $faker->url,
        'shareable_id' => $shareable->id,
        'shareable_type' => $shareableType
    ];
});
