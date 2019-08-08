<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Project::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'user_id' => factory(App\User::class),
        'objective' => $faker->text,
        'key' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'progress' => $faker->randomDigit
    ];
});
