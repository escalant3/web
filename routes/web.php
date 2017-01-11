<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);
Route::post('/contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);
