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

// Route::get('/comics', 'ComicsController@index');
Route::resource('/movies', 'MovieControllerAdv');

// route('movies.show', $movie -> id)
// <form action="{{ route('movies.store') }}" method="post">
//       @csrf
//       @method('POST')
// </form>