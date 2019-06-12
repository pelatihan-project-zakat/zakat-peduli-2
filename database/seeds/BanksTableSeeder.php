<?php

use Illuminate\Database\Seeder;
use App\Bank;

class BanksTableSeeder extends Seeder
{
    public function run()
    {
        factory(Bank::class, 3)->create();
    }
}
