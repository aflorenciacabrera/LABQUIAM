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

// Rutas Publicas
// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth', 'Admin']], function(){
// Rutas Privadas
Route::get('/home', 'HomeController@home');
Route::get('inicio','HomeController@inicio');
// Administrador 
Route::get('admin/tecnico','AdministradorController@tecnico');

//Activar y suspender usuarios
Route::get('inicio/activar/{tipo}/{user}','HomeController@activar');
Route::get('inicio/suspender/{tipo}/{user}','HomeController@suspender');

// PERFIL
Route::get('/perfil','HomeController@perfil');
Route::put('/perfil','HomeController@editarPerfil');	
Route::post('/perfil', 'HomeController@update_avatar');
Route::delete('/perfil','HomeController@eliminarPerfil')->name("eliminarPerfil");
});