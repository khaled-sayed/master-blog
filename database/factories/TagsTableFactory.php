<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    $title = $faker->sentence(3);

    return [
        'title' => $title,
        'slug' => implode('-',explode(' ', strtolower($title))),
        'keywords' => implode(',',explode(' ',$faker->sentence(5))),
        'description' => $faker->sentence(10),
    ];
});
