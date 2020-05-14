<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::post('/lunch-offers/', 'PostController@store');
    Route::get('/lunch-offers/create', 'PostController@create')->name('post.create');
    Route::delete('/lunch-offers/{post}', 'PostController@destroy')->name('post.delete');
    Route::get('/lunch-offers/{post}/edit', 'PostController@edit')->name('post.edit');
    Route::put('/lunch-offers/{post}', 'PostController@update');
    Route::delete('/lunch-offers/{post}/remove-tags/', 'PostController@destroyTag');
    Route::get('/lunch-offers/{post}/create/', 'PostController@createTag')->name('post.tags');
    Route::get('/lunch-offers/{post}/store/{tags}', 'PostController@storeTag');
    Route::get('/lunch-offers/{post}/edit/image', 'PostController@editImage');
    Route::put('/lunch-offers/{post}/image', 'PostController@updateImage');
    Route::get('/tags/create', 'TagsController@create')->name('tags.create');
    Route::post('/tags', 'TagsController@store');
    Route::delete('/tags/{tag}', 'TagsController@destroy')->name('tags.delete');
    Route::get('/tags/{tag}/edit', 'TagsController@edit')->name('tags.edit');
    Route::put('/tags/{tag}', 'TagsController@update');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/lunch-offers', 'PostController@index')->name('post.index');

Route::get('/lunch-offers/{post}', 'PostController@show')->name('post.show');
Route::get('/lunch-offers/custom/{tags}', 'PostController@custom')->name('post.custom');


Route::get('/tags', 'TagsController@index')->name('tags.index');
Route::get('/tags/{tag}', 'TagsController@show')->name('tags.show');
