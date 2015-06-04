<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Note routes.

Route::get('/', 'HomeController@viewHome');
Route::get('notes', 'NotesController@viewReadAll');
Route::get('notes/create', 'NotesController@viewCreate');
Route::get('notes/update', 'NotesController@viewUpdate');
Route::get('notes/{id}', 'NotesController@viewReadOne');
Route::get('notes/{id}/edit', 'NotesController@viewUpdate');
Route::post('notes', 'NotesController@actionCreate');
Route::put('notes/{id}', 'NotesController@actionUpdate');
Route::patch('notes/{id}', 'NotesController@actionUpdate');
Route::delete('notes/{id}', 'NotesController@actionDelete');

// User routes.

Route::get('user/{id}', 'UserController@viewReadOne');
Route::get('user/{id}/edit', 'UserController@viewUpdate');
Route::put('user/{id}', 'UserController@actionUpdate');
Route::patch('user/{id}', 'UserController@actionUpdate');
Route::delete('user/{id}', 'UserController@actionDelete');

// Authentication controllers.

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
