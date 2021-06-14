<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'category_id' => $faker->numberBetween(1, 3), //we only generate 3 categories so far
        'user_id' => 1,                                         // we only generate one user
        'slug' => $faker->slug(),
        'excerpt' => $faker->text(200),
        'body' => $faker->paragraph(7),
    ];
});
