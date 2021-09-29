<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\LandingController::class, 'index']);
Route::get('/Propietarios', [App\Http\Controllers\PropietariosController::class, 'index']);
Route::get('/Propietarios/crear', [App\Http\Controllers\PropietariosController::class, 'create']);
Route::get('/Propietarios/listar', [App\Http\Controllers\PropietariosController::class, 'listar']);
Route::post('/Propietarios/guardar', [App\Http\Controllers\PropietariosController::class, 'save']);
Route::get('/Propietarios/editar/{id}', [App\Http\Controllers\PropietariosController::class, 'edit']);
Route::post('/Propietarios/actualizar', [App\Http\Controllers\PropietariosController::class, 'update']);
Route::get('/Propietarios/cambiar/estado/{id}/{estado}', [App\Http\Controllers\PropietariosController::class, 'updateState']);


Route::get('/', [App\Http\Controllers\LandingController::class, 'index']);
Route::get('/Inmuebles', [App\Http\Controllers\InmueblesController::class, 'index']);
Route::get('/Inmuebles/crear', [App\Http\Controllers\InmueblesController::class, 'create']);
Route::get('/Inmuebles/listar', [App\Http\Controllers\InmueblesController::class, 'listar']);
Route::post('/Inmuebles/guardar', [App\Http\Controllers\InmueblesController::class, 'save']);
Route::get('/Inmuebles/editar/{id}', [App\Http\Controllers\InmueblesController::class, 'edit']);
Route::post('/Inmuebles/actualizar', [App\Http\Controllers\InmueblesController::class, 'update']);
Route::get('/Inmuebles/cambiar/estado/{id}/{estado}', [App\Http\Controllers\InmueblesController::class, 'updateState']);


Route::get('/PropInmuebles', [App\Http\Controllers\PropInmueblesController::class, 'index']);
Route::post('/PropInmuebles/guardar2', [App\Http\Controllers\PropInmueblesController::class, 'save']);
Route::get('/PropInmuebles/listar2', [App\Http\Controllers\PropInmueblesController::class, 'show']);