<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;
use App\Models\Profile;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => Carbon::now(),
        'password' => bcrypt('abc123'), // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'profileable_type' => 'User',
        'profileable_id' => function () {
            return factory('App\Models\User')->create()->id;
        },
        'about' => $faker->paragraph,
        'facebook' => 'www.facebook.com/madcoderz',
        'twitter' => 'www.twitter.com/madCoderz',
    ];
});
