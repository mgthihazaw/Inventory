<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(BrandTableSeeder::class);
          $this->call(CategoryTableSeeder::class);
          $this->call(ManufactureTableSeeder::class);
          $this->call(DescriptionTableSeeder::class);
          $this->call(LocationTableSeeder::class);
          $this->call(ProductTableSeeder::class);
          $this->call(TransferTableSeeder::class);
    }
}
