<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('posts', 'PostController');
Route::resource(
    'vagas',
    'JobController',
    [
        'names' => [
            'index' => 'jobs.index',
            'store' => 'jobs.store',
            'show' => 'jobs.show',
            'destroy' => 'jobs.destroy',
            'update' => 'jobs.update',
            'edit' => 'jobs.edit',
            'create' => 'jobs.create',
        ]
    ]
);

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/vue', 'VueController@index');



Route::group(['middleware' => 'auth'], function () {
    Route::get('/asset', 'AssetController@index');
});
