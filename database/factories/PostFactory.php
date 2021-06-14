<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'user_id' => factory(User::class),
        'category_id' => factory(Category::class),
        'slug' => $faker->slug(),
        'excerpt' => $faker->text(200),
        'body' => $faker->paragraph(7),
    ];
});
