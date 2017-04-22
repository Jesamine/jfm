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


Auth::routes();

Route::get('/', 'ForumController@index');
Route::get('/about', 'ForumController@about');
Route::get('/team', 'ForumController@team');
Route::get('/contact', 'ForumController@contact');

Route::resource('events', 'EventsController');
Route::resource('albums', 'AlbumController');

Route::group(['prefix' => config('backpack.base.route_prefix'), 'admin', 'middleware'  => 'auth'], function(){
  CRUD::resource('event', 'Admin\EventCrudController');
  CRUD::resource('sponser', 'Admin\SponserCrudController');
});
