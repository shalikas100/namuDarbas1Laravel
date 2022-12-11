<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'salis' => $this->faker->country(),
        'miestas' => $this->faker->city(),
        'pasto_kodas' => $this->faker->postcode()
    ];
});
