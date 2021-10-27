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

use App\Http\Controllers\PersonaController;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Rutas de personas
 */

Route::resource('personas', 'PersonaController');
Route::get('personas/{persona}/delete', 'PersonaController@delete')->name('personas.delete');

/**
 * Rutas de mascotas
 */

Route::get('mascotas/{persona_id}', 'MascotaController@listarPorPersona')->name('mascotas.index');
Route::get('mascotas/{persona_id}/create', 'MascotaController@create')->name('mascotas.create');
Route::get('mascotas/{mascota}/edit', 'MascotaController@edit')->name('mascotas.edit');
Route::get('mascotas/{mascota}/delete', 'MascotaController@delete')->name('mascotas.delete');
Route::delete('mascotas/{mascota}', 'MascotaController@destroy')->name('mascotas.destroy');
Route::post('mascotas', 'MascotaController@store')->name('mascotas.store');
Route::put('mascotas/{mascota}/update', 'MascotaController@update')->name('mascotas.update');
