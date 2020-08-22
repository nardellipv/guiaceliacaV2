<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Promotion;
use Faker\Generator as Faker;

$factory->define(Promotion::class, function (Faker $faker) {
    return [
        'name' => $faker->text('50'),
        'text' => $faker->text('20'),
        'percentage' => rand('1','99'),
        'picture_id' => rand('1','10'),
        'commerce_id' => rand('1','10'),
    ];
});
