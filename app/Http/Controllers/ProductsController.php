<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Validator;



class ProductsController extends Controller
{

    //
    public function store(Request $request)
    {
        // try to save to the database

        $rules = [
            'name' => 'bail|required',
            'description' => 'bail|required',
            'price' => 'required'
        ];

        // validate params from request
        $validation = Validator::make($request->all(), $rules);
        
        if ($validation->fails()) {
            $errors = $validation->errors();
            return response($errors->toJson(), 400);
        }


        // returns true if success
        $product = new Product;
        $product->name = $request->name;
        $product->price = (int)$request->price;
        $product->description = $request->description;

        // check if success
        if($product->save()) {
            return response()->json([
                'ok' => 201,
                'product' => $product
            ], 201);
        } else{
            return response()->json([
                'error' => 'Failed to save'
            ], 400);
        }
    }
}
