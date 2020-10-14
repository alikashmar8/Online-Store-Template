<?php

use App\Models\Company;
use App\Models\User;
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
Route::get('/terms_and_conditions', function () {
    return view('terms');
});
Route::get('/privacy_policy', function () {
    return view('privacy');
});

Route::get('/tips', function () {
    return view('tips');
});

Route::get('/evaluate', function () {
    return view('evaluate');
});

Route::get('/insurance', function () {
    return view('insurance');
});
Route::get('/findAgents', function (Request $request) {
    if (isset($request->name)) {
        $searched = $request->name;
        $searchBy = $request->searchBy;
        $results = [];
        if ($searchBy == 'name') {
            $results = User::where('role', '=', 1)->where('name', 'like', '%' . $searched . '%')->get();
            foreach ($results as $user) {
                $user->company = Company::where('AgentId', $user->id)->first();
            }
        }
        if ($searchBy == 'companyName') {
            $companies = Company::where('name', 'like', '%' . $searched . '%')->get();
            foreach ($companies as $company) {
                $user = User::findOrFail($company->AgentId);
                $user->company = $company;
                $results[$user->id] = $user;
            }
        }

//        if ($type == 'location'){
//
//          }
        $type = $request->type;

    } else {
        $searched = '';
        $results = User::where('role', '=', 1)->get();
        foreach ($results as $user) {
            $user->company = Company::where('AgentId', $user->id)->first();
        }
        $type = 'agents';
    }
    return view('findAgents', compact('searched', 'results', 'type'));
});

//All users route
Route::get('/', '\App\Http\Controllers\PropertiesController@index')->name('index');
Route::get('/properties/buy', '\App\Http\Controllers\PropertiesController@buyIndex');
Route::get('/properties/rent', '\App\Http\Controllers\PropertiesController@rentIndex');
Route::get('/submitEvaluation', '\App\Http\Controllers\EmailsController@submitEvaluationForm');
Route::get('/contactForProperty', '\App\Http\Controllers\EmailsController@contactForProperty');

//Admin Routes
Route::post('/accept', '\App\Http\Controllers\PropertiesController@accept')->middleware('auth');
Route::get('/acceptProperties', '\App\Http\Controllers\PropertiesController@viewNotAcceptedProperties')->middleware('auth');
Route::get('/acceptedProperties', '\App\Http\Controllers\PropertiesController@allAcceptedProperties')->middleware('auth');
Route::get('/users', '\App\Http\Controllers\UsersController@index')->middleware('auth');
Route::get('/agents', '\App\Http\Controllers\UsersController@agentsIndex')->middleware('auth');

Route::resource('users', '\App\Http\Controllers\UsersController', ['except' => ['index', 'store', 'create', 'show', 'edit', 'destroy']])->middleware(['auth', 'verified']);
Route::get('/users/{id}', '\App\Http\Controllers\UsersController@show')->middleware('auth');
Route::delete('/users/destroy/{id}', '\App\Http\Controllers\UsersController@destroy')->middleware('auth');

//Route::get('/properties/{id}', '\App\Http\Controllers\PropertiesController@edit')->middleware('auth');
Route::get('/properties/myProperties', '\App\Http\Controllers\PropertiesController@myProperties')->middleware(['auth', 'verified']);
Route::resource('properties', '\App\Http\Controllers\PropertiesController', ['except' => ['show']])->middleware(['auth', 'verified']);
Route::get('/properties/{id}', '\App\Http\Controllers\PropertiesController@show');
Route::get('/search-agents', '\App\Http\Controllers\SearchController@searchAgent');
Route::get('/search-properties', '\App\Http\Controllers\SearchController@searchProperties');

//Auth routes
//Route::get('registerAgent', '\App\Http\Controllers\UsersController@registerAgent')->middleware('guest');
Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
