<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(\App\Car::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        "id" => function(){
                return App\Car::all()->random();
        },
        "year" => $faker->paragraph,
        "price" => $faker->numberBetween(0,5)
    ];
});
