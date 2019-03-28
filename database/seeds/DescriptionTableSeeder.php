<?php

use Illuminate\Database\Seeder;

class DescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('descriptions')->truncate();
        $str = 'abcdefghijklmnopqrst ';
        


        $descriptions = [
          ['name' => str_shuffle($str)],
          ['name' => str_shuffle($str)],
          ['name' => str_shuffle($str)],
          ['name' => str_shuffle($str)],
        ];

        DB::table('descriptions')->insert($descriptions);
    }
}
