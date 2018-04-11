<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/movies/{movie_id}/comments', 'CommentsController@store')->name('comments-movie');
Route::get('/create', 'MoviesController@create');
Route::post('/movies', 'MoviesController@store');
Route::get('/movies', 'MoviesController@index');
Route::get('/movies/{id}', 'MoviesController@show')->name('single-movie');