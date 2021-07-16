<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('productos', 'ProductoController@index');

Route::post('producto/crear', 'ProductoController@store');
Route::put('producto/actualizar', 'ProductoController@update');
Route::delete('producto/eliminar', 'ProductoController@destroy');

Route::post('producto/detalle/crear', 'DetalleProductoController@store');
Route::put('producto/detalle/actualizar', 'DetalleProductoController@update');
Route::delete('producto/detalle/eliminar', 'DetalleProductoController@destroy');
