<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catalogos\catalogo;
use App\Http\Controllers\Administracion;

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

Route::get('/', [Administracion::class, 'index']);

Route::get('/blog', [Administracion::class, 'blog']);

Route::get('/catalogo/instrumentos', [catalogo::class, 'catalogo']);

Route::get('/informacion', [Administracion::class, 'informacion']);

