<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/tips', function () {
    return view('tips');
});

Route::get('/evaluate', function () {
    return view('evaluate');
});

Route::get('/insurance', function () {
    return view('insurance');
});
Route::get('/findAgents', function () {
    return view('findAgents');
});

//All users route
Route::get('/', '\App\Http\Controllers\PropertiesController@index')->name('index');
Route::get('/properties/buy', '\App\Http\Controllers\PropertiesController@buyIndex');
Route::get('/properties/rent', '\App\Http\Controllers\PropertiesController@rentIndex');

//Admin Routes
Route::post('/accept', '\App\Http\Controllers\PropertiesController@accept')->middleware('auth');
Route::get('/acceptProperties', '\App\Http\Controllers\PropertiesController@viewNotAcceptedProperties')->middleware('auth');
Route::get('/acceptedProperties', '\App\Http\Controllers\PropertiesController@allAcceptedProperties')->middleware('auth');
Route::get('/users', '\App\Http\Controllers\UsersController@index')->middleware('auth');
Route::get('/agents', '\App\Http\Controllers\UsersController@agentsIndex')->middleware('auth');

Route::post('/users/edit', '\App\Http\Controllers\UsersController@edit')->middleware('auth');
Route::get('/users/{id}', '\App\Http\Controllers\UsersController@show')->middleware('auth');
Route::delete('/users/destroy/{id}', '\App\Http\Controllers\UsersController@destroy')->middleware('auth');


Route::get('/properties/myProperties', '\App\Http\Controllers\PropertiesController@myProperties');
Route::resource('properties', '\App\Http\Controllers\PropertiesController', ['except' => ['show']])->middleware('auth');
Route::get('/properties/{id}', '\App\Http\Controllers\PropertiesController@show');
Route::get('/search-agents', '\App\Http\Controllers\SearchController@searchAgent');
Route::get('/search-properties', '\App\Http\Controllers\SearchController@searchProperties');

//Auth routes
//Route::get('registerAgent', '\App\Http\Controllers\UsersController@registerAgent')->middleware('guest');
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
