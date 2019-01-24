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
 
Route::get('/admin', function () {
    return view('admin.welcome');
});
 
Route::get('/admin/gallery', function(){
    return view('admin.gallery');
});
Route::get('/admin/gallery2', function(){
    return view('admin.gallery2');
});
Route::get('/admin/visimisi', function(){
    return view('admin.visimisi');
});
Route::get('/admin/newsletter', function(){
    return view('admin.newsletter');
});
Route::get('/admin/footer',function(){
    return view('admin.footer');
});
Route::get('/admin/about',function(){
    return view('admin.about');
});

//NEWSLETTER
Route::get('/admin/newsletter', 'NewsletterController@index');
Route::get('/admin/newsletter/delete/{id}', 'NewsletterController@delete');
Route::post('/admin/newsletter/save', 'NewsletterController@save');
 
//PROFILE
Route::get('/admin/profile', 'ProfileController@all');
Route::post('/admin/profile/update/{id}', 'ProfileController@update');
 
Route::post('/admin/footer/update', 'FooterController@update');
Route::post('/admin/about/update', 'AboutController@update');
 
Auth::routes();
 
Route::get('/admin', 'HomeController@welcome');
 
Route::prefix('admin111')->group(function(){
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
Route::group(['prefix' => 'gallery2'] , function(){
    Route::get('/', 'GalleryController@indexgallery2');
    Route::post('/save', 'GalleryController@savegallery2');
    Route::get('/delete/{id}', 'GalleryController@deletegallery2');
});


Route::post('/admin/visimisi/update', 'VisimisiController@visimisi_update');


Route::get('/', function() {
    return view('index');
});
Route::get('/about', function() {
    return view('about');
});
Route::get('/contact', function() {
    return view('contact');
});
Route::get('/service', function() {
    return view('service');
});
Route::get('/gallery', function() {
    return view('gallery');
});