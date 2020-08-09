<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Price;
use Faker\Generator as Faker;

$factory->define(Price::class, function (Faker $faker) {
    return [
        'name' => $faker->text,
        'description' =>  $faker->numberBetween('100','1000')
    ];
});
