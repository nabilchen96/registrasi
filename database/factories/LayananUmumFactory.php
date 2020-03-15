<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LayananUmum;
use Faker\Generator as Faker;

$factory->define(LayananUmum::class, function (Faker $faker) {

    return [
        'pelatihan' => $faker->word,
        'deskripsi' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
