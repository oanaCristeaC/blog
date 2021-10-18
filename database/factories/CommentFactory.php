<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => factory(Post::class)->create([
            'user_id' => 3,
            'category_id' => 2
        ]),
        'user_id' => factory(User::class)->create(),
        'body' => $faker->paragraph(5),
    ];
});
