<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administracion;
use App\Http\Controllers\Catalogos\Catalogo;
use App\Http\Controllers\PQR;
use App\Http\Controllers\Informacion\Presentacion;

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
//seccion administracion
Route::get('/', [Administracion::class, 'index']);

//seccion Presentacion

Route::get('presentacion/historia', [Presentacion::class, 'historia']);
    
Route::get('presentacion/mision', [Presentacion::class, 'mision']);
    
Route::get('presentacion/ubicacion',  [Presentacion::class, 'ubicacion']);
    
//seccion catalogo
    //perro
Route::get('perro/catalPerro',  [Catalogo::class, 'catalPerro']);

//gato

Route::get('gatos/catalGato',  [Catalogo::class, 'catalGato']);

Route::get('PQR', [PQR::class, 'PQR']);
    
   