<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
    	'name' => $faker->sentence(4),
        'description' => $faker->text($maxNbChars = 180),
    ];
});
