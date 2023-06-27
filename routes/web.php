<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('welcome');
});




//Task -- 2
Route::get('/home', function () {
    return redirect('/dashboard', 302);
});

//Route::get('/task',[\App\Http\Controllers\DemoController::class,'Demo']);

//Task --- 4
Route::middleware('auth')->group(function (){
    Route::get('/profile',function (){
       return "Hello i am from Profile";
    });

    Route::get('/setting',function () {
        return "I am from setting";
    });
});



//Task --- 5
Route::resource('/product',\App\Http\Controllers\ProductController::class);
Route::resource('/product/{productId}',\App\Http\Controllers\ProductController::class);


//Task --- 6
Route::get('/single',\App\Http\Controllers\SingleActionController::class);
