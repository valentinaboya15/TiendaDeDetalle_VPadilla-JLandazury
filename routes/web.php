<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\InformacionController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [AdministracionController::class, 'getindex']);

//seccion catalogo

Route::get('catalogo/desayunos', [CatalogoController::class, 'getdesayunos']);

Route::get('catalogo/flores', [CatalogoController::class, 'getflores']);

Route::get('catalogo/frutales', [CatalogoController::class, 'getfrutales']);

Route::get('catalogo/anchetas', [CatalogoController::class, 'getanchetas']);
//Route::get('catalogo/anchetas/{id_pro}', [CatalogoController::class, 'getanchetas'])->name('detalle_ancheta');

Route::get('categorias/listado', [CatalogoController::class, 'getcategoria']);

Route::get('catalogo/listado_producto', [CatalogoController::class, 'listadoProducto']);

//seccion carrito
Route::get('carrito/carro', [CarritoController::class, 'getcarro']);

//seccion clientes
Route::get('clientes/visualizar/cliente', [ClientesController::class, 'getclientes'])->middleware('auth')->name('listado_clientes');
Route::get('clientes/listado', [ClientesController::class, 'listado_clientes'])->name('listado_clientes');
Route::get('clientes/registro', [ClientesController::class, 'form_registro'])->name('formulario_registro');
Route::post('clientes/registrar', [ClientesController::class, 'registrarCli'])->name('registrar_cliente'); 
//seccion facturacion
Route::get('facturacion/factura', [FacturacionController::class, 'getfactura']);