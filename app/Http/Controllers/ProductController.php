<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class ProductController extends Controller
{
    //

    public function product_category($id){
        $category = Category::find($id);
        $products = Product::where('category_id',$id)->get();
        return view('product.index',compact('products','category','id'));
    }
    public function show($id){
        $product = Product::find($id);
        return view('product.show',compact('product'));
    }
}