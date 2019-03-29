<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transfer;

class TransfersController extends Controller
{
    
   
    public function index()
    {
        $transfers=Transfer::orderBy('created_at','desc')->get();
        return response()->json([
            'transfers' => $transfers
        ]);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
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
