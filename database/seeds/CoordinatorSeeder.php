<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoordinatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coordinators')->insert([
            [
                'full_name' => 'Суворов Вадим Вадимович'
            ],
            [
                'full_name' => 'Копылов Назарий Петрович'
            ],
            [
                'full_name' => 'Маслова Радмила Мартыновна'
            ],
            [
                'full_name' => 'Ковалёв Мартин Федотович'
            ],
            [
                'full_name' => 'Романова Елизавета Юрьевна'
            ],
            [
                'full_name' => 'Маркова Иоланта Тимофеевна'
            ]
        ]);
    }
}
