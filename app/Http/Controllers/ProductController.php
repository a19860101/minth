<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class ProductController extends Controller
{
    //

    public function product_category($lang,$id){
        if($lang  == 'zh_TW'){
            app()->setLocale('zh_TW');
        }else{
            app()->setLocale('en');
        }
        $category = Category::find($id);
        $products = Product::where('category_id',$id)->get()->groupBy('brand_id');
        // $brand_title = 
        // $b = Product::where('category_id',$id)
        // return $products;
        return view('product.index',compact('products','category','id'));
    }
    public function show($id,$lang){
        if($lang  == 'zh_TW'){
            app()->setLocale('zh_TW');
        }else{
            app()->setLocale('en');
        }
        $product = Product::find($id);
        $cid = $product->category->id;
        return view('product.show',compact('product','cid'));
    }
}