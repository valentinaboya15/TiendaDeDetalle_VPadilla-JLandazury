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

//seccion carrito
Route::get('/carrito/carro', [CarritoController::class, 'listadoCarrito']);
Route::get('/carrito/registroCarrito', [CarritoController::class, 'registroCarrito'])->name('registro_carrito'); 
Route::post('/carrito/registrar', [CarritoController::class, 'registrarCart'])->name('registrar_carrito'); 
Route::get('/carrito/eliminar/{id_car}', [CarritoController::class, 'eliminarCart'])->name('eliminar_carrito');
//seccion factura
Route::get('/facturacion/facturacion', [FacturacionController::class, 'facturacion']);
Route::get('/facturacion/factura', [FacturacionController::class, 'getfactura'])->name('factura_carrito');  
Route::post('/facturacion/pagar', [FacturacionController::class, 'pagoCarrito'])->name('Pago_Carrito'); 
//seccion catalogo

Route::get('/catalogo/desayunos', [CatalogoController::class, 'getdesayunos']);
Route::get('/catalogo/flores', [CatalogoController::class, 'getflores']);
Route::get('/catalogo/frutales', [CatalogoController::class, 'getfrutales']);
Route::get('/catalogo/anchetas', [CatalogoController::class, 'getanchetas']);
//Route::get('catalogo/anchetas/{id_pro}', [CatalogoController::class, 'getanchetas'])->name('detalle_ancheta');

Route::get('categorias/listado', [CatalogoController::class, 'getcategoria']);
//seccion productos
Route::get('/Productos/listado_producto', [CatalogoController::class, 'listadoProducto']);
Route::get('/Productos/registro', [CatalogoController::class, 'registroProducto'])->name('registro_producto'); 
Route::post ('/Productos/registrar', [CatalogoController::class, 'registrarProducto'])->name('registrar_producto'); 


//seccion clientes
Route::get('clientes/visualizar/cliente', [ClientesController::class, 'getclientes'])->middleware('auth')->name('listado_clientes');
Route::get('clientes/listado', [ClientesController::class, 'listado_clientes'])->name('listado_clientes');
Route::get('clientes/registro', [ClientesController::class, 'form_registro'])->name('formulario_registro');
Route::post('clientes/registrar', [ClientesController::class, 'registrarCli'])->name('registrar_cliente'); 
//seccion facturacion
