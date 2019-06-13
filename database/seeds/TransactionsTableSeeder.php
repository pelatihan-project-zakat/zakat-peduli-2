<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Transaction::class, 15)->create();
    }
}
