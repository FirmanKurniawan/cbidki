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
Route::get('footer',function(){
    return view('footer');
});
Route::get('about',function(){
    return view('about');
});

//NEWSLETTER
Route::get('/newsletter', 'NewsletterController@index');
Route::get('/newsletter/delete/{id}', 'NewsletterController@delete');
Route::post('/newsletter/save', 'NewsletterController@save');
 
//PROFILE
Route::get('/profile', 'ProfileController@all');
Route::post('/profile/update/{id}', 'ProfileController@update');
 
Route::post('footer/update', 'FooterController@update');
Route::post('about/update', 'AboutController@update');
 
Auth::routes();
 
Route::get('/', 'HomeController@welcome');
 
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
Route::group(['prefix' => 'gallery'] , function(){
    Route::get('/', 'GalleryController@indexgallery');
    Route::get('/add', 'GalleryController@addgallery');
    Route::post('/save', 'GalleryController@savegallery');
    Route::get('/delete/{id}', 'GalleryController@deletegallery');
});


Route::post('/visimisi/update', 'VisimisiController@visimisi_update');