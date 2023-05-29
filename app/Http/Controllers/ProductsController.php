<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function showAllProducts(){
        $products = Product::all();
        return view('welcome',['products'=>$products]);
    }
}
