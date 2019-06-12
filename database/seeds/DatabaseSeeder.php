<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {        
        // $this->call(MustahiqsTableSeeder::class);
        // $this->call(BanksTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
