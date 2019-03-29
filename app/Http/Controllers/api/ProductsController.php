<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductsController extends Controller
{
   
    public function index()
    {
        $products=Product::with([
         'manufacture'=> function($query){
            $query->select(['id','name']);
        },
        'description'=> function($query){
            $query->select(['id','name']);
        },
        'location'=> function($query){
            $query->select(['id','name']);
        },
        'category'=> function($query){
            $query->select(['id','name']);
        },
        'brand'=> function($query){
            $query->select(['id','name']);
        }])->orderBy('created_at','desc')->get();
        return response()->json([
            'products' => $products
        ]);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {

       foreach($request->products as $key => $value){
         Product::updateOrCreate([
            'quantity'=>$value['quantity'] ,
            'serial'=>$value['serial'] ,
            'manufacture_id'=>$value['manufacture'] ,
            'description_id'=>$value['description'],
            'location_id'=>$value['location'] ,
            'category_id'=>$value['category'],
            'brand_id'=>$value['model'],
            'status'=>$value['status']

         ]);
       };
       return response()->json('Successfully Created');
       
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
