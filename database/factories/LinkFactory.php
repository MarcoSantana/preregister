<?php

use Faker\Generator as Faker;

$factory->define(App\Link::class, function (Faker $faker) {
    return [
        //Here I will create an object containing the key with the name of the db row and fill it qith the faker faker info
        'title' => substr($faker->sentence(2), 0, -1),
        'url' => $faker->url,
        'description' => $faker->paragraph
    ];
});
