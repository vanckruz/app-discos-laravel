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

Route::get('/', ['uses' => 'IndexController@index', 'as' => 'index']);


Route::post('/album', ['uses' => 'AlbumesController@store', 'as' => 'crear_album']);
Route::get('/album/{album_id}', ['uses' => 'AlbumesController@show', 'as' => 'detalle_album']);
Route::put('/album/{album_id}', ['uses' => 'AlbumesController@update', 'as' => 'editar_album']);
Route::delete('/album/{album_id}', ['uses' => 'AlbumesController@destroy', 'as' => 'eliminar_album']);

Route::post('/artista', ['uses' => 'ArtistasController@store', 'as' => 'crear_artista']);
Route::get('/artista/{artista_id}', ['uses' => 'ArtistasController@show', 'as' => 'detalle_artista']);
Route::put('/artista/{artista_id}', ['uses' => 'ArtistasController@update', 'as' => 'editar_artista']);
Route::delete('/artista/{artista_id}', ['uses' => 'ArtistasController@destroy', 'as' => 'eliminar_artista']);

/*
Route::resource('api', 'AlbumesController', 
	[
		'only' => ['index', 'store', 'update', 'destroy', 'show']
	]);
*/
