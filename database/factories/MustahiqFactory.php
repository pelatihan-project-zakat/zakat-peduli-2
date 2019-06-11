<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Mustahiq;
use Faker\Generator as Faker;

$factory->define(Mustahiq::class, function (Faker $faker) {
    return [
        'nama_mustahiq' => "Yayasan ". $faker->company,
        'alamat_mustahiq' => $faker->address,
    ];
});
