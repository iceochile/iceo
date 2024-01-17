<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TiendaController;
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
    'verified'])->group(function () {Route::get('/dashboard', function () { return view('welcome'); })->name('dashboard');});

Route::get('como-funciona',[HomeController::class,'index'])->name('como-funciona');

Route::resource('tienda', TiendaController::class)->names('tiendas');