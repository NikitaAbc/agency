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
        $this->call(PageTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ContactTableSeeder::class);
    }
}
