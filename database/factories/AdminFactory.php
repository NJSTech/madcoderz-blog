<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Admin;
use Faker\Generator as Faker;
use Carbon\Carbon;
use App\Models\Profile;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => Carbon::now(),
        'password' => bcrypt('abc123'), // password
        'job_title' => $faker->jobTitle,
        'remember_token' => Str::random(10),
    ];
});
$factory->define(Profile::class, function (Faker $faker) {
    return [
        'profileable_type' => 'Admin',
        'profileable_id' => function () {
            return factory('App\Models\Admin')->create()->id;
        },
        'about' => $faker->paragraph,
        'facebook' => 'www.facebook.com/madcoderz',
        'twitter' => 'www.twitter.com/madCoderz',
    ];
});
