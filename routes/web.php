<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/product',function(){
    return view('product.index');
});
Route::get('/product/show',function(){
    return view('product.show');
});
Route::get('/equipment',function(){
    return view('equipment.index');
});
Route::get('/equipment/{id}',function(){
    return view('equipment.show');
});
Route::get('/certified',function(){
    return view('certified');
});
Route::get('/history',function(){
    return view('page.history');
});
Route::get('/philosophy',function(){
    return view('page.philosophy');
});
Route::get('/join-us',function(){
    return view('page.join');
});
Route::get('/contact',function(){
    return view('page.contact');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
