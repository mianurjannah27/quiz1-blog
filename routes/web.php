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
Route::get('/', 'BlogController@index');
//Route::get('/isi', function(){
	


/*Route::get('/', function(){
	return view('welcome');
});*/

	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('/category','CategoryController');

	Route::resource('/post','PostController');

	Route::resource('/photo','PhotoController');

	Route::resource('/Album','AlbumController');



