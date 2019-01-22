<?php

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
    return view('welcome');
});
Route::get('gallery', function(){
	return view('gallery');
});
Route::get('visimisi', function(){
	return view('visimisi');
});
Route::get('newsletter', function(){
	return view('newsletter');
});
Route::geT('footer',function(){
	return view('footer');
});
Route::get('about',function(){
	return view('about');
});
