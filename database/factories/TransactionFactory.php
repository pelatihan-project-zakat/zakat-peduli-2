<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 6, $max = 11),
        'program_id' => $faker->numberBetween($min = 1, $max = 2),
        'bank_id' => 1,
        'atas_nama' => $faker->name,
        'nominal' => $faker->numberBetween($min = 100000, $max = 2000000),
        'tgl_bayar' =>$faker->dateTimeThisMonth($max = 'now', $timezone = null),        
        'status'=>$faker->numberBetween($min = 1, $max = 4),
    ];

    // Belum selesai
});
