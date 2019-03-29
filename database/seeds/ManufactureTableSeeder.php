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
        
        


        $manufactures = [
          ['name' => 'HP'],
          ['name' => 'Dell'],
          ['name' => 'ACER'],
          ['name' => 'Hawei'],
          ['name' => 'MI'],
          ['name' => 'Sony'],
          ['name' => 'Apple'],
        ];

        DB::table('manufactures')->insert($manufactures);
    }
}
