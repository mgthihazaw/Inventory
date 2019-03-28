<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $categories = [
          ['name' => 'Shirt'],
          ['name' => 'Car'],
          ['name' => 'Computer'],
          ['name' => 'Phone'],
        ];

        DB::table('categories')->insert($categories);
    }
}
