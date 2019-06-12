<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nama_bank' => $faker->bank,
        'no_rek' => $faker->bankAccountNumber,
        'logo' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
