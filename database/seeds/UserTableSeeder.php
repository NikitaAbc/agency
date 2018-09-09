<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'admin@mail.ru',
                'password' => bcrypt("123456"),
            ],
            [
                'email' => 'admin2@mail.ru',
                'password' => bcrypt('user111'),

            ],
        ]);
    }
}
