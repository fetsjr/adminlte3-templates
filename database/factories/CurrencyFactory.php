<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Currency;
use Faker\Generator as Faker;

$factory->define(Currency::class, function (Faker $faker) {

    return [
        'country' => $faker->word,
        'currency' => $faker->word,
        'code' => $faker->word,
        'symbol' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
