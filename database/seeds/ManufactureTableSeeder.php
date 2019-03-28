<?php

use Illuminate\Database\Seeder;

class ManufactureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufactures')->truncate();
        $str = 'abcdefghijklmnopqrst ';
        


        $manufactures = [
          ['name' => str_shuffle($str)],
          ['name' => str_shuffle($str)],
          ['name' => str_shuffle($str)],
          ['name' => str_shuffle($str)],
        ];

        DB::table('manufactures')->insert($manufactures);
    }
}
