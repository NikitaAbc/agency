<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'address' => 'Holland',
                'phone1' => 3232121313,
                "email_contact"=> "sfdsfd@mail.ru",
                "google_link" => "empty",
                "linkedin_link" => "isset"
            ],
        ]);
    }
}
