<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Lecture;
use Faker\Generator as Faker;

$factory->define(Lecture::class, function (Faker $faker) {
    return [
       'category_id' => rand(1,6),
       'title' => $faker->sentence,
       'description' => $faker->text
    ];
});
