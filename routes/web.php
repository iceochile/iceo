<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HoraController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class,'dashboard'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'])->group(function () {Route::get('dashboard', function () { return view('welcome'); })->name('dashboard');});

Route::get('como-funciona',[HomeController::class,'comofunciona'])->name('como-funciona');

Route::get('productos',[HomeController::class,'productos'])->name('productos');

Route::resource('tienda', TiendaController::class)->names('tiendas');

Route::resource('hora', HoraController::class)->names('horas');

Route::get('{tienda}/trabajadores',[TiendaController::class,'horastrabajadores'])->name('horas.trabajador');

Route::get('{tienda}/listadotrabajadores',[TiendaController::class,'listadotrabajadores'])->name('listado.trabajadores');

Route::get('{tienda}/horas/{year}/{month}',[TiendaController::class,'ingresohorastrabajadores'])->name('horas.ingreso');

Route::get('{tienda}/gastos',[TiendaController::class,'gastostienda'])->name('gastos.tienda');

Route::resource('user',UserController::class)->names('users');