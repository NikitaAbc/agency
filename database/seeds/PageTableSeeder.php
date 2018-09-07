<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'name' => 'Главная',
                'menu' => 'Главная',
                'route' => "",
                'position' => 1,

            ],
            [
                'name' => 'Услуги',
                'menu' => 'Услуги',
                'route' => "uslugi",
                'position' => 2,
            ],
            [
                'name' => 'О нас',
                'menu' => 'О нас',
                'route' => "o-nas",
                'position' => 3,
            ],
            [
                'name' => 'Новости',
                'menu' => 'Новости',
                'route' => "novosti",
                'position' => 4,
            ],
            [
                'name' => 'Контакты',
                'menu' => 'Контакты',
                'route' => "kontakty",
                'position' => 5,
            ],
        ]);
    }
}
