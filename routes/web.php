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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// PLAYERS
Route::get('/player/show/{id}', 'PlayerController@show')->name('player.show');
Route::get('/player/teams/{id}', 'PlayerController@showTeams')->name('player.teams');
Route::get('/player/edit/{id}', 'PlayerController@edit')->name('player.edit');
Route::patch('/player/update/{player}', 'PlayerController@update')->name('player.update');

// FIELDS
Route::get('/canchas', 'FieldController@index')->name('index-field');
Route::get('/canchas/agregar', 'FieldController@create')->name('create-field');
Route::post('/canchas/agregar', 'FieldController@store')->name('store-field');
Route::get('/canchas/{id}/detalle', 'FieldController@show')->name('show-field');
Route::get('/canchas/{id}/editar', 'FieldController@edit')->name('edit-field');
Route::post('/canchas/{id}/editar', 'FieldController@update')->name('update-field');
// MATCHES
Route::get('/match/index', 'MatchController@index')->name('match.index');
Route::get('/match/show/{id}', 'MatchController@show')->name('match.show');
Route::get('/match/create', 'MatchController@create')->name('match.create');
Route::post('/match/store', 'MatchController@store')->name('match.store');

// TEAMS
Route::get('/team/index/{id?}', 'TeamController@index')->name('team.index');
Route::get('/team/show/{id}', 'TeamController@show')->name('team.show');
Route::get('/team/create', 'TeamController@create')->name('team.create');
Route::post('/team/store', 'TeamController@store')->name('team.store');
Route::post('/team/add/player', 'TeamController@addPlayer')->name('team.add.player');
Route::post('/team/remove/player', 'TeamController@removePlayer')->name('team.remove.player');



// TEST
Route::view('vue', 'vue');
