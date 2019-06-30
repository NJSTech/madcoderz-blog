<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Admin;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => Carbon::now(),
        'password' => bcrypt('abc123'), // password
        'job_title' => 'Author',
        'remember_token' => Str::random(10),
    ];
});
