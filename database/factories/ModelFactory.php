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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'username' => $faker->unique()->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Profile::class, function ($faker) {
    return [
        'user_id' => function () {
            return factory('App\User')->create(['role' => 'business'])->id;
        },
        'name' => $faker->name,
        'gender'  => $faker->randomElement(['Male', 'Female']),
        'birthday'  => $faker->date($format = 'Y-m-d'),
        'country' => $faker->country,
        'about'      => $faker->paragraph,
        'phone'       => $faker->e164PhoneNumber,
        'rank'  => $faker->numberBetween(0,500),
        'review' => $faker->numberBetween(0,100),
    ];
});

$factory->define(App\Game::class, function ($faker) {
    return [
        'name' => $faker->unique()->word,
        'description' => $faker->paragraph,
        'category'  => $faker->word,
    ];
});

$factory->define(App\Table::class, function ($faker) {
    return [
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'game_id' => function () {
            return factory('App\Game')->create()->id;
        },
        'date' => $faker->date($format = 'Y-m-d'),
        'time' => $faker->time($format = 'H:i:s'),
        'comment'  => $faker->paragraph,
        'place' => $faker->streetAddress,
        'private'  => $faker->boolean($chanceOfGettingTrue = 10),
        'needed_players' => $faker->numberBetween(0,7),
        'all_players' => $faker->numberBetween(2,8),
    ];
});
