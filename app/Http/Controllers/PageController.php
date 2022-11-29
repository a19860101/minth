<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    //
    public function product_show($id){
        $product = Product::find($id);
        return view('product.show',compact('product'));
    }
}
