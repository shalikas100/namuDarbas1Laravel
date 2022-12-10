<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name'=> $this->faker->firstName(),
        'surname'=> $this->faker->firstName(),
        'personal_code'=> $this->faker->numberBetween(10000,99999),
        'address'=> $this->faker->address()
    ];
});
