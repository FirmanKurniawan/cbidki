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
Route::get('/images/{filename}', function ($filename)
{
	$path = storage_path('images') . '/' . $filename;
	$file = File::get($path);
	$type = File::mimeType($path);
	$response = Response::make($file);
	$response->header("Content-Type", $type);
	return $response;
});

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'gallery'] , function(){ 
	Route::get('/', 'GalleryController@indexgallery');
	Route::get('/add', 'GalleryController@addgallery');
	Route::post('/save', 'GalleryController@savegallery');
	Route::get('/delete/{id}', 'GalleryController@deletegallery');

});
