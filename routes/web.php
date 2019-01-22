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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
	Route::get('/', 'VisimisiController@indexvisimisi');
	Route::get('/misi/add', 'VisimisiController@addmisi');
	Route::post('/misi/save', 'VisimisiController@savemisi');
	Route::get('/misi/edit/{id}', 'VisimisiController@editmisi');
	Route::post('/misi/update', 'VisimisiController@updatemisi');
	Route::get('/misi/delete/{id}', 'VisimisiController@deletemisi');

	Route::get('/visi/add', 'VisimisiController@addvisi');
	Route::post('/visi/save', 'VisimisiController@savevisi');
	Route::get('/visi/edit/{id}', 'VisimisiController@editvisi');
	Route::post('/visi/update', 'VisimisiController@updatevisi');
	Route::get('/visi/delete/{id}', 'VisimisiController@deletevisi');
});
