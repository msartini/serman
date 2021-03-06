<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Serman\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(Serman\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->streetAddress,
        'create_at' => $faker->dateTimeThisYear($max = 'now'),
        'update_at' => $faker->dateTimeThisYear($max = 'now'),
    ];
});

$factory->define(Serman\Task::class, function (Faker\Generator $faker) {
    return [
        'body' => $faker->paragraph
    ];
});

