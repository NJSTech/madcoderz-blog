<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        "title" => $faker->title,
        "body" => $faker->text,
        "category_id" => function () {
            return factory('App\Models\Category')->create()->id;
        },
        "status" => 1,
        'author_id' => function () {
            return factory('App\Models\Admin')->create()->id;
        },
    ];
});
