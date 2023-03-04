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

//Route::get('/', function () {
  //  return view('welcome');
//});

Auth::routes();
Route::get('/onas', function(){
 return view('onas');
});


//Route::get('/catalog',[App\Http\Controllers\Productss::class,'show'])->name('home');
Route::get('/catalog',[App\Http\Controllers\Productss::class,'show'])->name('home');
Route::get('/onas',[App\Http\Controllers\Productss::class,'Onas'])->name('home');
Route::get('/Tovars',[App\Http\Controllers\Productss::class,'Tovars'])->name('home');
Route::get('/GdeNas',[App\Http\Controllers\Productss::class,'Gden'])->name('home');
Route::get('/detal/{id}',[App\Http\Controllers\Productss::class,'detal'])->name('home');
Route::get('/baskets',[App\Http\Controllers\Productss::class,'Baskets']);
Route::get('/add/{id}',[App\Http\Controllers\Productss::class,'Basketsy']);




