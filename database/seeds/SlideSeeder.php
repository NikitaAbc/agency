<?php

use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
            [
                'image' => '',
                'position' => 1,
            ],
            [
                'image' => '',
                'position' => 2,
            ],
            [
                'image' => '',
                'position' => 3,
            ],
        ]);
    }
}
