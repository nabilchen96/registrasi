<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LayananDetail;
use Faker\Generator as Faker;

$factory->define(LayananDetail::class, function (Faker $faker) {

    return [
        'penyewaan' => $faker->word,
        'harga' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
