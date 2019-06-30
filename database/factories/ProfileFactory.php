<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $userable = [
        'User',
        'Admin',
    ]; // Add new noteables here as we make them
    $userableType = $faker->randomElement($userable);
    $userableId = $faker->numberBetween(0, 10);

    return [
        'userable_type' => $userableType,
        'userable_id' => $userableId,
        'about' => $faker->paragraph,
        'facebook' => 'www.facebook.com/madcoderz',
        'twitter' => 'www.twitter.com/madCoderz',
    ];
});
