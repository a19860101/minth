<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
Route::get('/product/{id}',[PageController::class,'product_show']);
Route::get('/equipment',function(){
    return view('equipment.index');
});
// Route::get('/equipment/{id}',function(){
//     return view('equipment.show');
// });
Route::get('/equipment/test',function(){
    return view('equipment.test');
});
Route::get('/equipment/machine',function(){
    return view('equipment.machine');
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
Route::get('/news',function(){
    return view('posts.index');
});
Route::get('/links',function(){
    return view('posts.links');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
