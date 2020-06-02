<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reply;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'reply' => $faker->paragraphs(rand(3, 4), true),
        'user_id' => App\User::pluck('id')->random()
    ];
});
