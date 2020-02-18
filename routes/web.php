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

Route::get('/a', function () {
    return view('backend.dashboard');
});

Route::get('/home','PageController@index');

Route::get('/dashboard','AdminController@index');

Route::get('/book','AdminController@uploadBook');
Route::get('/book_information','AdminController@manageBook');
Route::post('/insert_book','AdminController@insert_book');
Route::get('/delete_book/{id}','AdminController@delete_book');


Route::get('/magazine','AdminController@magazine');
Route::get('/delete_magazine/{id}','AdminController@delete_magazine');
Route::get('/magazine_information','AdminController@magazineInfo');
Route::post('/update_magazine/{id}','AdminController@update_magazine');
Route::get('/admin/{id}/edit','AdminController@edit_magazine');
Route::post('/insert_magazine','AdminController@insert_magazine');


Route::get('/section','AdminController@section');
Route::post('/add_section','AdminController@add_section');
Route::get('/section_information','AdminController@sectioninfo');
Route::get('/admin/{id}/edit','AdminController@edit_section');
Route::post('/update_section/{id}','AdminController@update_section');
Route::get('/delete_section/{id}','AdminController@delete_section');


