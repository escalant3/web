<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);
Route::get('/preguntas-frecuentes', ['as' => 'faq', 'uses' => 'HomeController@faq']);
Route::get('/politica-de-privacidad', ['as' => 'policy', 'uses' => 'HomeController@policy']);
Route::get('/terminos-y-condiciones', ['as' => 'terms', 'uses' => 'HomeController@terms']);
Route::get('/desarrolladores', ['as' => 'devs', 'uses' => 'HomeController@devs']);
Route::post('/contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);
