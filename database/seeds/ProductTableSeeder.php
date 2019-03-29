<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('products')->truncate();

         $products=[
              [
              	'quantity'=> rand(1,10),
                'serial'=> rand(1000,3000),
                'manufacture_id'=> rand(1,7),
                'description_id'=> rand(1,4),
                'location_id'=> rand(1,4),
                'category_id'=> rand(1,4),
                'brand_id'=> rand(1,3),
                'status'=> rand(0,1),
              ],
              [
              	'quantity'=> rand(1,10),
                'serial'=> rand(1000,3000),
                'manufacture_id'=> rand(1,7),
                'description_id'=> rand(1,4),
                'location_id'=> rand(1,4),
                'category_id'=> rand(1,4),
                'brand_id'=> rand(1,3),
                'status'=> rand(0,1),
              ],
              [
              	'quantity'=> rand(1,10),
                'serial'=> rand(1000,3000),
                'manufacture_id'=> rand(1,7),
                'description_id'=> rand(1,4),
                'location_id'=> rand(1,4),
                'category_id'=> rand(1,4),
                'brand_id'=> rand(1,3),
                'status'=> rand(0,1),
              ],
              [
              	'quantity'=> rand(1,10),
                'serial'=> rand(1000,3000),
                'manufacture_id'=> rand(1,7),
                'description_id'=> rand(1,4),
                'location_id'=> rand(1,4),
                'category_id'=> rand(1,4),
                'brand_id'=> rand(1,3),
                'status'=> rand(0,1),
              ],
              [
              	'quantity'=> rand(1,10),
                'serial'=> rand(1000,3000),
                'manufacture_id'=> rand(1,7),
                'description_id'=> rand(1,4),
                'location_id'=> rand(1,4),
                'category_id'=> rand(1,4),
                'brand_id'=> rand(1,3),
                'status'=> rand(0,1),
              ],
              [
              	'quantity'=> rand(1,10),
                'serial'=> rand(1000,3000),
                'manufacture_id'=> rand(1,7),
                'description_id'=> rand(1,4),
                'location_id'=> rand(1,4),
                'category_id'=> rand(1,4),
                'brand_id'=> rand(1,3),
                'status'=> rand(0,1),
              ],
              [
              	'quantity'=> rand(1,10),
                'serial'=> rand(1000,3000),
                'manufacture_id'=> rand(1,7),
                'description_id'=> rand(1,4),
                'location_id'=> rand(1,4),
                'category_id'=> rand(1,4),
                'brand_id'=> rand(1,3),
                'status'=> rand(0,1),
              ],
              [
              	'quantity'=> rand(1,10),
                'serial'=> rand(1000,3000),
                'manufacture_id'=> rand(1,7),
                'description_id'=> rand(1,4),
                'location_id'=> rand(1,4),
                'category_id'=> rand(1,4),
                'brand_id'=> rand(1,3),
                'status'=> rand(0,1),
              ],
              [
              	'quantity'=> rand(1,10),
                'serial'=> rand(1000,3000),
                'manufacture_id'=> rand(1,7),
                'description_id'=> rand(1,4),
                'location_id'=> rand(1,4),
                'category_id'=> rand(1,4),
                'brand_id'=> rand(1,3),
                'status'=> rand(0,1),
              ],
              [
              	'quantity'=> rand(1,10),
                'serial'=> rand(1000,3000),
                'manufacture_id'=> rand(1,7),
                'description_id'=> rand(1,4),
                'location_id'=> rand(1,4),
                'category_id'=> rand(1,4),
                'brand_id'=> rand(1,3),
                'status'=> rand(0,1),
              ],
         ];
         DB::table('products')->insert($products);
    }
}
