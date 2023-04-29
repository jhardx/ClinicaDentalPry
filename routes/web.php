<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\UsuarioController;
// use App\Http\Controllers\CitaController;
// use App\Http\Controllers\CompraController;
// use App\Http\Controllers\ComprobanteController;
// use App\Http\Controllers\ConsultaController;
// use App\Http\Controllers\HistorialMedicoController;
// use App\Http\Controllers\HistorialTratamientoController;
// use App\Http\Controllers\OdontologoController;
// use App\Http\Controllers\PacienteController;
// use App\Http\Controllers\ProductoController;
// use App\Http\Controllers\ProveedorController;
// use App\Http\Controllers\TipoComprobanteController;
// use App\Http\Controllers\TratamientoController;
// use App\Http\Controllers\VentasController;
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

Route::get('/', [HomeController::class, 'index'])->name('web.index');
