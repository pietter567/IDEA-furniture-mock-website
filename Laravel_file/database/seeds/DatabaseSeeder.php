<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        
        $this->call(ProductTypeSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(UserSeeder::class);
    }
}
