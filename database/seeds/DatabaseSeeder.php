<?php

use Illuminate\Database\Seeder;
use App\Client;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Client::class, 500)->create();
        // $this->call([ka_parasyti_cia?::class]);
    }
}
