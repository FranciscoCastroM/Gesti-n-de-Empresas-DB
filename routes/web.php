<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\InventarioController;

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

//ruta de Orden
Route::resource('Orden', '\App\Http\Controllers\OrdenController');

//ruta de Solicitud
Route::resource('Solicitud', '\App\Http\Controllers\SolicitudController');

//ruta salida almacen
Route::resource('salida_almacen', '\App\Http\Controllers\SalidaAlmacenController');


//ruta de factura 
Route::resource('factura',FacturaController::class); //esta parte la usamos para la autenticacion cuando se implemente el login 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ruta de bien
Route::resource('bien', '\App\Http\Controllers\BienController');  

//rutas de almacen
Route::resource('almacen',AlmacenController::class);
//rutas de items
Route::resource('items', ItemsController::class);
//rutas de inventario
Route::resource('inventario', InventarioController::class);