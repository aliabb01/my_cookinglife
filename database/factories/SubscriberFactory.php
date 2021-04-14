<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subscriber;
use Faker\Generator as Faker;

$factory->define(Subscriber::class, function (Faker $faker) {
    return [
        'subscribedMail' => $this->faker->unique()->safeEmail(),        
    ];
});
