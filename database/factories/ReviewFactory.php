<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Review;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'customer'=>$faker->name,
        'product_id'=>$faker->numberBetween(1,100),
        'description'=>$faker->sentence(6),
        'star'=>$faker->numberBetween(1,5),
    ];
});
