<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/brands','api\BrandsController');
Route::apiResource('/locations','api\LocationsController');
Route::apiResource('/descriptions','api\DescriptionsController');
Route::apiResource('/categories','api\CategoriesController');
Route::apiResource('/manufactures','api\ManufacturesController');
Route::apiResource('/products','api\ProductsController');
Route::apiResource('/transfers','api\TransfersController');