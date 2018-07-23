<?php

use Faker\Generator as Faker;

/* $factory->define(Model::class, function (Faker $faker) {
    return [
        //
    ];
}); */

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'body' => $faker->text(200)
    ];
});
