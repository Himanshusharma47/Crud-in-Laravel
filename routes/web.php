<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abc', function () {
    return view('one');
});

// create different route for crud 

Route::get('/display-form', 'App\Http\Controllers\IController@display_form');
Route::post('/form-submit', 'App\Http\Controllers\IController@form_submit');
Route::get('/display-data', 'App\Http\Controllers\IController@display_data');
Route::get('delete-data/{id}', 'App\Http\Controllers\IController@delete_data');
Route::get('edit-display/{id}', 'App\Http\Controllers\IController@edit_display');
Route::post('edit-form/{id}', 'App\Http\Controllers\IController@edit_data');
Route::post('search-record', 'App\Http\Controllers\IController@search');