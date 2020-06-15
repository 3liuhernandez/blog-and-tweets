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
//index wth login
Route::get('/', 'GuestController@index');

// create a new entry
Route::get('/entries/create', 'EntryController@create')->name('entries_create');
// save data from new entry to try to insert
Route::post('/entries', 'EntryController@store');
// show all entries from a user logged
Route::get('/home', 'HomeController@index')->name('my_entries');
// show an entry by user logged
Route::get('/entries/{entry}', 'GuestController@show');
// edit an entry by user logged
Route::get('/entries/{entry}/edit', 'EntryController@edit');
// edit an entry
Route::put('/entries/{entry}', 'EntryController@update');
// see the user's profile
Route::get('/users/{user}', 'UserController@show');
