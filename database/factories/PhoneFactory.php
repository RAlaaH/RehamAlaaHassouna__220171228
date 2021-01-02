<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Phone;
use Faker\Generator as Faker;

$factory->define(Phone::class, function (Faker $faker) {
    $phones = ['iPhone','Samsung','Honor','Nokia'];
    $key = array_rand($phones);
    return [
        'name' => $phones[$key],
        'user_id' => \App\User::all()->random()->id
    ];
});
