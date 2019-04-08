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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'defaultController@index')->name('default');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/NewProperty', 'PropertyController@entry')->name('propertyEntry');
Route::get('/PropertyList', 'PropertyController@list')->name('propertyList');



Route::post('/store', 'PropertyController@validateform');
Route::post('/updateProperty/{id}/property', 'PropertyController@updateExistingProperty');


Route::get('/preview/{id}/property', 'PropertyController@preview')->name('propertyPreview');
Route::get('/updateproperty/{id}/property', 'PropertyController@updateproperty')->name('propertyPreview');
Route::get('/delete/{id}/property', 'PropertyController@delete');

Route::get('/agent', 'CreateAgentController@index')->name('agent');
Route::post('/storeAgent', 'CreateAgentController@validationform');


Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('upload/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
