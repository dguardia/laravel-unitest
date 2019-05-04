<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Cars::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement(array('ford', 'honda', 'toyota')),
        'Model' => $faker->randomElement(array('model1', 'model2', 'model3')),
        'Year' =>$faker->year($max = 'now')
    ];
});
