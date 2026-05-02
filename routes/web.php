<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AbastecimientosController;

// Inicio login
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/Login', [LoginController::class, 'login'])->name('Login.post');

// Público
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/{id}', [ProductoController::class, 'show'])->name('productos.show');


// Usuario
    Route::middleware(['auth'])->group(function () {
    Route::get('/user/productos', [UsuarioController::class, 'productos'])->name('user.productos');
    Route::get('/user/perfil', [UsuarioController::class, 'perfil'])->name('user.perfil');
    Route::get('/user/pago', [UsuarioController::class, 'pago'])->name('user.pago');
    Route::post('/user/pago', [UsuarioController::class, 'pagoStore'])->name('user.pago.store');
    Route::get('/user/recibos', [UsuarioController::class, 'recibos'])->name('user.recibos');
});

// Admin
    Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/inventario', [AdminController::class, 'inventario'])->name('admin.inventario');   
    Route::get('/admin/productos', [AdminController::class, 'productos'])->name('admin.productos');
    Route::get('/admin/proveedores', [AdminController::class, 'proveedores'])->name('admin.proveedores');

    // Abastecimientos (solo con su controlador)
    Route::get('/admin/abastecimientos', [AbastecimientosController::class, 'index'])->name('abastecimientos.index');
    Route::get('/admin/abastecimientos/create', [AbastecimientosController::class, 'create'])->name('abastecimientos.create');
    Route::post('/admin/abastecimientos', [AbastecimientosController::class, 'store'])->name('abastecimientos.store');

    // Recibos con detalles combinados
    Route::get('/admin/recibos', [AdminController::class, 'recibosConDetalles'])->name('admin.recibos');
});