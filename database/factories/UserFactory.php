<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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
        'username' => $faker->name,
    	'email' => $faker->unique()->email,
    	'email_verified_at' => now(),
    	'password' => $faker->password,
    	'full_name' => $faker->name,
    	'avatar' => $faker->imageUrl($width = 640, $height = 480),
    	'banned' => $faker->numberBetween($min = 1, $max = 3),
    	'role_id' => $faker->numberBetween($min = 1, $max = 5),
    	'deleted_at' => $faker->dateTime(),
    	'remember_token' => Str::random(10),
    	'created_at' => $faker->dateTime(),
    	'updated_at' => $faker->dateTime()
    ];
});
