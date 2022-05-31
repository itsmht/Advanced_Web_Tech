<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function list()
    {
        $products = array();
        for($i=1;$i<=15;$i++)
        {
            $product = array("id"=>$i,
                             "name"=>"Product $i"
                            );
            $products[] = (object)$product;

        }
        return view('products.service')
                ->with('products', $products);
    }
    function home()
    {
        return view('page.landingpage');
    }
    function about()
    {
        return view('page.about');
    }
    function contact()
    {
        return view('page.contact');
    }
    function teams($id)
    {
        return view('products.teams')
                ->with('id',$id);
                
    }
}
