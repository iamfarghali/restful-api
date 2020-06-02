<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(3, 7)), '.'),
        'body' => $faker->paragraphs(rand(5, 15), true),
    ];
});
