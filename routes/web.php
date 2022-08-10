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

Route::get('/','match_Controllers@matchs');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/match_add', 'match_Controllers@create')->name('match.add');
Route::post('/match_store', 'match_Controllers@store')->name('match.store');
Route::get('/match_delet/{id}', 'match_Controllers@delet')->name('match.delet');
Route::get('/match_edit/{id}', 'match_Controllers@edit')->name('match.edit');
Route::post('/match_apdate/{id}', 'match_Controllers@apdate')->name('match.apdate');
Route::get('/matchs', 'match_Controllers@matchs')->name('matchs');
Route::get('/player_add', 'players@create')->name('player.add');
Route::get('/player_delet/{id}', 'players@delet')->name('match.delet');
Route::get('/player_delet/{id}', 'players@delet')->name('player.delet');
Route::get('/player_edit/{id}', 'players@edit')->name('player.edit');
Route::post('/player_apdate/{id}', 'players@apdate')->name('player.apdate');
Route::post('/player_stor', 'players@store')->name('player.store');
Route::get('/players', 'players@matchs')->name('players');
