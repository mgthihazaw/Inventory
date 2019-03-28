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
          ['name' => 'Mandalay'],
          ['name' => 'Sagaing'],
          ['name' => 'Yangon'],
          ['name' => 'Shan'],
        ];

        DB::table('locations')->insert($locations);
    }
}
