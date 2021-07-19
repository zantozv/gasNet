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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('quien', function () {
    return view('quien');
});
Route::get('contacto', function () {
    return view('contacto');
});
Route::get('servicio', function () {
    return view('servicio');
});



//RUTAS DE CIUDAD
Route::get('/ciudad/listarciudades','CiudadesController@index')->name('ciudad.index');
Route::get('/ciudad/crear','CiudadesController@create')->name('ciudad.create');
Route::post('/ciudad/agregar','CiudadesController@store')->name('ciudad.store');
Route::get('/ciudad/editar/{id}','CiudadesController@edit')->name('ciudad.edit');
Route::get('/ciudad/actualizar/{id}','CiudadesController@update')->name('ciudad.update');
Route::get('/ciudad/eliminar/{id}','CiudadesController@destroy')->name('ciudad.destroy');
//RUTAS TIPO SERVICIO
Route::get('/tiposervicio/listartiposerv','TiposerviciosController@index')->name('tiposervicio.index');
Route::get('/tiposervicio/crear','TiposerviciosController@create')->name('tiposervicio.create');
Route::post('/tiposervicio/agregar','TiposerviciosController@store')->name('tiposervicio.store');
Route::get('/tiposervicio/editar/{id}','TiposerviciosController@edit')->name('tiposervicio.edit');
Route::get('/tiposervicio/actualizar/{id}','TiposerviciosController@update')->name('tiposervicio.update');
Route::get('/tiposervicio/eliminar/{id}','TiposerviciosController@destroy')->name('tiposervicio.destroy');
// RUTAS SERVICIO
Route::get('servicio/listarservicio','ServiciosController@index')->name('servicio.index');
Route::get('/servicio/crear','ServiciosController@create')->name('servicio.create');
Route::post('/servicio/agregar','ServiciosController@store')->name('servicio.store');
Route::get('/servicio/editar/{id}','ServiciosController@edit')->name('servicio.edit');
Route::get('/servicio/actualizar/{id}','ServiciosController@update')->name('servicio.update');
Route::get('/servicio/eliminar/{id}','ServiciosController@destroy')->name('servicio.destroy');
// RUTAS DOCUMENTOS
Route::get('documento/listarsdocs','DocumentosController@index')->name('documento.index');
Route::get('/documento/crear','DocumentosController@create')->name('documento.create');
Route::post('/documento/agregar','DocumentosController@store')->name('documento.store');
Route::get('/documento/editar/{id}','DocumentosController@edit')->name('documento.edit');
Route::get('/documento/actualizar/{id}','DocumentosController@update')->name('documento.update');
Route::get('/documento/eliminar/{id}','DocumentosController@destroy')->name('documento.destroy');
// RUTAS REQUISITOS
Route::get('requisito/listarsreqs','RequisitosController@index')->name('requisito.index');
Route::get('/requisito/crear','RequisitosController@create')->name('requisito.create');
Route::post('/requisito/agregar','RequisitosController@store')->name('requisito.store');
Route::get('/requisito/editar/{id}','RequisitosController@edit')->name('requisito.edit');
Route::get('/requisito/actualizar/{id}','RequisitosController@update')->name('requisito.update');
Route::get('/requisito/eliminar/{id}','RequisitosController@destroy')->name('requisito.destroy');

// RUTAS USUARIOS
Route::get('user/listaruser','UserController@index')->name('user.index');
Route::get('/user/crear','UserController@create')->name('user.create');
Route::post('/user/agregar','UserController@store')->name('user.store');
Route::get('/user/editar/{id}','UserController@edit')->name('user.edit');
Route::get('/user/actualizar/{id}','UserController@update')->name('user.update');
Route::get('/user/eliminar/{id}','UserController@destroy')->name('user.destroy');