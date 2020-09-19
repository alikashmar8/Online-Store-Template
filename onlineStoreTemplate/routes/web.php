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

//Route::get('/', function () {
//    return view('welcome');
//});

//All users route
Route::get('/','\App\Http\Controllers\ApartmentsController@index')->name('index');



//Admin Routes
Route::put('/accept/{id}','\App\Http\Controllers\ApartmentsController@accept')->name('apartment.accept')->middleware('auth');
Route::get('/acceptApartments','\App\Http\Controllers\ApartmentsController@viewNotAcceptedApartments')->middleware('auth');;
Route::get('/acceptedApartments','\App\Http\Controllers\ApartmentsController@allAcceptedApartments')->middleware('auth');;
Route::get('/users','\App\Http\Controllers\UsersController@index')->middleware('auth');

Route::get('/apartments/buy','\App\Http\Controllers\ApartmentsController@buyIndex');
Route::get('/apartments/rent','\App\Http\Controllers\ApartmentsController@rentIndex');

Route::resource('categories','\App\Http\Controllers\CategoriesController');

Route::resource('apartments','\App\Http\Controllers\ApartmentsController')->middleware('auth');;


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
