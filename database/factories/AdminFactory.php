<?php

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

$factory->define(App\Models\Admin::class, function (Faker $faker) {
    return [
        'username' => $faker->firstName,
        'mobile' => '186'.random_int(10000000,99999999),
        'real_name' => $faker->name,
        'password' => bcrypt('123456'),
        'status' => 1,
        'remember_token' => str_random(10),
    ];
});
