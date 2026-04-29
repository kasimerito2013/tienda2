<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AbastecimientosController;

// Inicio login
Route::get('/', function () {
    return view('welcome'); // aquí está tu formulario de login con Tailwind
})->name('welcome');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// por si alguien no quiere iniciar sesion y solo ver
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/{id}', [ProductoController::class, 'show'])->name('productos.show');

// ruta de usuario normalito
Route::middleware(['auth'])->group(function () {
    Route::get('/perfil', [UsuarioController::class, 'perfil'])->name('perfil');
    Route::get('/pago', [UsuarioController::class, 'pago'])->name('pago');
});

// ruta de administrador
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/inventario', [AdminController::class, 'inventario'])->name('admin.inventario');
    Route::get('/admin/productos', [AdminController::class, 'productos'])->name('admin.productos');
    Route::get('/admin/recibos', [AdminController::class, 'recibos'])->name('admin.recibos');
    Route::get('/admin/detalles', [AdminController::class, 'detallesRecibos'])->name('admin.detalles');
    Route::get('/admin/proveedores', [AdminController::class, 'proveedores'])->name('admin.proveedores');
    Route::get('/admin/abastecimientos', [AdminController::class, 'abastecimientos'])->name('admin.abastecimientos');
});

// abastecimientos
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/abastecimientos', [AbastecimientosController::class, 'index'])->name('abastecimientos.index');
    Route::get('/admin/abastecimientos/create', [AbastecimientosController::class, 'create'])->name('abastecimientos.create');
    Route::post('/admin/abastecimientos', [AbastecimientosController::class, 'store'])->name('abastecimientos.store');
});
