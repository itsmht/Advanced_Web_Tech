<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function list()
    {
        $products = Product::all();
        return view('products.list')->with('products',$products);
    } 
    function details(Request $req)
    {
        $products = Product::where('id', '=', $req->id)
                                ->select('name','id','price')
                                ->first();
        return view('products.details')
                    ->with('products', $products);
    }
    function reg()
    {
        return view('products.reg');
    }
    function regSubmit(Request $req)
    {
        $this-> validate($req,
            [
                "name"=>"required|max:20",
                "price"=>"required"
            ],
            [
                "name.required"=> "Product Name is required",
                "name.max"=> "Exceeds 20 characters",
                "price.required"=>"Please provide price"
            ]
            );
            $s1 = new Product();
            $s1->name = $req->name;
            $s1->price = $req->price;
            $s1->save();
            return "Submitted with valid value";
    }
}
