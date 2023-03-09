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


 
Auth::routes();

Route::get('/',[App\Http\Controllers\Productss::class,'show'])->name('catalog');
Route::get('/home',[App\Http\Controllers\Productss::class,'show'])->name('catalog');
Route::get('/catalog',[App\Http\Controllers\Productss::class,'show'])->name('catalog');
Route::get('/onas',[App\Http\Controllers\Productss::class,'Onas'])->name('detal');
Route::get('/Tovars',[App\Http\Controllers\Productss::class,'Tovars'])->name('home');
Route::get('/GdeNas',[App\Http\Controllers\Productss::class,'Gden'])->name('home');
Route::get('/detal/{id}',[App\Http\Controllers\Productss::class,'detal'])->name('home');
Route::get('/baskets',[App\Http\Controllers\Productss::class,'Baskets'])->name('home');
Route::get('/add/{id}',[App\Http\Controllers\Productss::class,'Basketsy']);
Route::get('/oformlenie',[App\Http\Controllers\Productss::class,'Oformlenie']);
$groupData = [
	'namespace' => 'Blog\Admin',
	'prefix' => 'admin/blog',
];
Route::group($groupData, function(){
	$methods = ['index','edit','store','update','create',];
	Route::resource('categories','CategoryController')->only($methods)->names('blog.admin.categories');
});
Route::group(['middleware' => 'auth', 'middleware' => 'access:admin'], function () {
  // Здесь продолжайте свое творение
  Route::get('/dashboard', function() { echo "HELLO WORLD"; } );
});

Route::get('/token', function (Request $request) {
  $token = $request->session()->token();

  $token = csrf_token();
});
//кОРЗИНА


 


