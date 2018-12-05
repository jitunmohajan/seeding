<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
         'name' => $faker->name,
        'email' => $faker->unique()->email,
        'remember_token' => str_random(10),
    ];
});
