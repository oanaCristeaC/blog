<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'slug' => $faker->slug(),
        'excerpt' => $faker->text(200),
        'body' => $faker->paragraph(20),
    ];
});
