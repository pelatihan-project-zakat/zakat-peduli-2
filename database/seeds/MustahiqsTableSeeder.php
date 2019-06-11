<?php

use Illuminate\Database\Seeder;
use App\Mustahiq;

class MustahiqsTableSeeder extends Seeder
{

    public function run()
    {
        factory(Mustahiq::class, 10)->create();
    }
}
