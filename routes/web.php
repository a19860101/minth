<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LinkController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/test',function(){
    return view('equipment.test');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/home/{lang}',function($lang){
    if($lang  == 'zh_TW'){
        app()->setLocale('zh_TW');
    }else{
        app()->setLocale('en');
    }
    return view('home');
});
Route::get('/product',function(){
    return view('product.index');
});
// Route::get('/product/{id}',[PageController::class,'product_show']);
Route::get('/product/{lang}/{id}',[ProductController::class,'product_category']);
Route::get('/product/detail/{id}',[ProductController::class,'show']);
Route::get('/equipment',function(){
    return view('equipment.index');
});
// Route::get('/equipment/{id}',function(){
//     return view('equipment.show');
// });
Route::get('/equipment/feature/{lang}',function($lang){
    if($lang  == 'zh_TW'){
        app()->setLocale('zh_TW');
    }else{
        app()->setLocale('en');
    }
    return view('equipment.feature');
});
Route::get('/equipment/test/{lang}',function($lang){
    if($lang  == 'zh_TW'){
        app()->setLocale('zh_TW');
    }else{
        app()->setLocale('en');
    }
    return view('equipment.test');
});
Route::get('/equipment/machine/{lang}',function($lang){
    if($lang  == 'zh_TW'){
        app()->setLocale('zh_TW');
    }else{
        app()->setLocale('en');
    }
    return view('equipment.machine');
});
Route::get('/certified/{lang}',function($lang){
    if($lang  == 'zh_TW'){
        app()->setLocale('zh_TW');
    }else{
        app()->setLocale('en');
    }
    return view('certified');
});
Route::get('/history/{lang}',function($lang){
    if($lang  == 'zh_TW'){
        app()->setLocale('zh_TW');
    }else{
        app()->setLocale('en');
    }
    return view('page.history');
});
Route::get('/philosophy/{lang}',function($lang){
    if($lang  == 'zh_TW'){
        app()->setLocale('zh_TW');
    }else{
        app()->setLocale('en');
    }
    return view('page.philosophy');
});
Route::get('/join-us/{lang}',function($lang){
    if($lang  == 'zh_TW'){
        app()->setLocale('zh_TW');
    }else{
        app()->setLocale('en');
    }
    return view('page.join');
});
Route::get('/contact/{lang}',function($lang){
    if($lang  == 'zh_TW'){
        app()->setLocale('zh_TW');
    }else{
        app()->setLocale('en');
    }
    return view('page.contact');
});
Route::get('/news',[PostController::class,'index']);
Route::get('/news/{id}',[PostController::class,'show']);
Route::get('/links',[LinkController::class,'index']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
