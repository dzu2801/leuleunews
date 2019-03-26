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

Route::get('/quantri', 'QTriController@Home');
Route::get('/quantri/dsbaiviet', 'QTriController@listPost');
Route::get('/quantri/dsdanhmuc', 'QTriController@listCate');
Route::post('/quantri/taobaiviet', 'QTriController@createPost');
Route::get('/quantri/taobaiviet', 'QTriController@createPost');

Route::post('quantri/createnew','QTriController@Create');
//Route::get('quantri/createnew','QTriController@Create');

//Route::get('quantri/editcategory/{id}','QTriController@EditCategories');
//Route::post('quantri/editcategory/{id}','QTriController@EditCategories');

Route::get('quantri/editnews/{id}','QTriController@editNews');
Route::post('quantri/editnews/{id}','QTriController@editNews');
Route::post('quantri/deletenews/{id}','QtriController@deleteNews');
Route::get('quantri/deletenews/{id}','QtriController@deleteNews');

Route::get('quantri/editcategory/{id}','QTriController@editCate');
Route::post('quantri/editcategory/{id}','QTriController@editCate');

