<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductApiModel;

class ProductController extends Controller
{
    //


    public function allProduct(){
    	$products = ProductApiModel::latest()->get();
    	$api_data = [

    		'status' => true,
    		'msg' => 'all ok',
    		'product' => $products,



    	];

    	return response()->json($api_data);

    }


    public function storeProduct(Request $request)
    {

    	ProductApiModel::create([

    		'name' => $request-> name,
    		'code' => $request-> code,
    		'price' => $request-> price,
    		'category' => $request-> category,
    		'description' => $request -> description



    	]);

    	return response()->json([
    		'message' => 'product Created Successfull'


    	],201);
    	
    }
}
