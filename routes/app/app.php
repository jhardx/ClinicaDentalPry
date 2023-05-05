<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\HistorialMedicoController;
use App\Http\Controllers\HistorialTratamientoController;
use App\Http\Controllers\OdontologoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TipoComprobanteController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\TwoFactorController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Route;

// Rutas de administradores
Route::resource('app/administradores', AdminController::class)->names('administradores');

// Rutas de autenticación
Route::resource('app/auth', AuthController::class)->names('auth');

// Rutas de verificación de dos factores
//Route::resource('app/2fa', TwoFactorController::class)->names('2fa');

// Rutas de citas
Route::resource('app/citas', CitaController::class)->names('citas');

// Rutas de compras
Route::resource('app/compras', CompraController::class)->names('compras');

// Rutas de comprobantes
Route::resource('app/comprobantes', ComprobanteController::class)->names('comprobantes');

// Rutas de consultas
Route::resource('app/consultas', ConsultaController::class)->names('consultas');

// Rutas de historiales medicos
Route::resource('app/historiales_medicos', HistorialMedicoController::class)->names('historiales_medicos');

// Rutas de historiales de tratamientos
Route::resource('app/historiales_tratamientos', HistorialTratamientoController::class)->names('historiales_tratamientos');

// Rutas de odontologos
Route::resource('app/odontologos', OdontologoController::class)->names('odontologos');

// Rutas de pacientes
Route::resource('app/pacientes', PacienteController::class)->names('pacientes');

// Rutas de productos
Route::resource('app/productos', ProductoController::class)->names('productos');

// Rutas de proveedores
Route::resource('app/proveedores', ProveedorController::class)->names('proveedores');

// Rutas de tipos de comprobantes
Route::resource('app/tipos_comprobantes', TipoComprobanteController::class);

// Rutas de tipos de tratamientos
Route::resource('app/tratamientos', TratamientoController::class)->names('tratamientos');

// Rutas de usuarios
Route::resource('app/usuarios', UsuarioController::class)->names('usuarios');

// Rutas de ventas
Route::resource('app/ventas', VentasController::class)->names('ventas');
