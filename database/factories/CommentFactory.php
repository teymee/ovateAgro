<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'article_id' => factory(\App\Comment::class),
        'name'       => $faker->name,
        'body'       => $faker->paragraph
    ];
});
