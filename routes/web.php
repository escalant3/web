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
Route::get('/blog', ['as' => 'blog', 'uses' => 'HomeController@blog']);
Route::post('/contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);

Route::group(['prefix' => 'api', 'as' => 'api.'], function() {
    Route::group(['prefix' => 'posts', 'as' => 'posts.'], function() {
        Route::get('/', function() {
            return App\Post::with('user')->latest()->where('published_at', '<', date('Y-m-d H:i:s'))->get();
        });

        Route::get('/{id}', function($id) {
            return App\Post::with('user')->latest()->where('published_at', '<', date('Y-m-d H:i:s'))->findOrFail($id);
        });
    });
});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::post('authenticate', ['as' => 'authenticate', 'uses' => 'AuthController@authenticate']);
Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'AdminController@index']);
    Route::post('/upload-image', ['as' => 'upload_image', 'uses' => 'AdminController@upload_image']);

    Route::group(['prefix' => 'posts', 'as' => 'posts.', 'namespace' => 'Admin'], function() {
        Route::get('/', ['as' => 'index', 'uses' => 'PostsController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'PostsController@create']);
        Route::post('/', ['as' => 'store', 'uses' => 'PostsController@store']);
        Route::get('{id}/edit', ['as' => 'edit', 'uses' => 'PostsController@edit']);
        Route::put('{id}', ['as' => 'update', 'uses' => 'PostsController@update']);
        Route::get('{id}/delete', ['as' => 'delete', 'uses' => 'PostsController@delete']);
    });

    Route::group(['prefix' => 'api', 'as' => 'api.', 'namespace' => 'Admin'], function() {
        Route::group(['prefix' => 'posts', 'as' => 'posts.'], function() {
            Route::get('/', function() {
                return App\Post::latest()->get();
            });

            Route::get('/{post}', function(App\Post $post) {
                return $post;
            });
        });
    });
});
