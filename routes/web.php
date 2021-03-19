<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
//ruta de crear
Route::get('/venta/create','VentaController@create');
//ruta principal    
Route::get('/venta/index','VentaController@index');
//ruta de eliminar 
Route::get('/venta/{id}', 'VentaController@eliminar');
//ruta del almacenamiento
Route::POST('/venta/store','VentaController@store');
//ruta de editar
Route::get('/venta/{id}/edit','VentaController@editar');
//ruta de actualizar
Route::patch('/venta/{id}/edit','VentaController@actualizar');