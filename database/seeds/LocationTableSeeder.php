<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('locations')->truncate();
        $locations = [
          ['name' => 'Mandalay','BU'=>'PHA14' ,'OU'=> 'P4'],
          ['name' => 'Sagaing','BU'=>'AUM34' ,'OU'=> 'P3'],
          ['name' => 'Yangon','BU'=>'CMP7' ,'OU'=> 'P4'],
          ['name' => 'Shan','BU'=>'CHI89' ,'OU'=> 'P1'],
        ];

        DB::table('locations')->insert($locations);
    }
}
