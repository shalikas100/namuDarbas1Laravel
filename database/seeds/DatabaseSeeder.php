<?php

use Illuminate\Database\Seeder;
use App\Client;
use App\Company;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        factory(App\Client::class, 500)->create();
       
        factory(App\Company::class, 139)->create();
    }
}
