<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacturaController;

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
Route::resource('factura',FacturaController::class)->middleware('auth'); //esta parte la usamos para la autenticacion cuando se implemente el login 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ruta de bien
Route::resource('bien', '\App\Http\Controllers\BienController');  
