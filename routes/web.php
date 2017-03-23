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

Route::get('/HomePage', function () {
    return view('HomePage');
});


Route::get('/inputs','HomeController@inputs');
Route::post('/forms','BorrowersController@forms');
Route::get('/delete/{id}', 'BorrowersController@delete');
Route::get('/edit/{id}', 'BorrowersController@edit');
Route::post('/save/{id}', 'BorrowersController@save' );

Auth::routes();

Route::get('/home', 'HomeController@index');
