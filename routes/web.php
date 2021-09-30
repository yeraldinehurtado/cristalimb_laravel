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

Route::get('/Roles', [App\Http\Controllers\RolesController::class, 'index']);

Route::get('/', [App\Http\Controllers\LandingController::class, 'index']);
Route::get('/quienessomos', [App\Http\Controllers\LandingController::class, 'quienessomos']);
Route::get('/servicios', [App\Http\Controllers\LandingController::class, 'servicios']);
Route::get('/agendarcita', [App\Http\Controllers\LandingController::class, 'agendarcita']);
Route::get('/Propietarios', [App\Http\Controllers\PropietariosController::class, 'index']);
Route::get('/Propietarios/crear', [App\Http\Controllers\PropietariosController::class, 'create']);
Route::get('/Propietarios/listar', [App\Http\Controllers\PropietariosController::class, 'listar']);
Route::post('/Propietarios/guardar', [App\Http\Controllers\PropietariosController::class, 'save']);
Route::get('/Propietarios/editar/{id}', [App\Http\Controllers\PropietariosController::class, 'edit']);
Route::post('/Propietarios/actualizar', [App\Http\Controllers\PropietariosController::class, 'update']);
Route::get('/Propietarios/cambiar/estado/{id}/{estado}', [App\Http\Controllers\PropietariosController::class, 'updateState']);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/', [App\Http\Controllers\LandingController::class, 'index']);
Route::get('/Inmuebles', [App\Http\Controllers\InmueblesController::class, 'index']);
Route::get('/Inmuebles/crear', [App\Http\Controllers\InmueblesController::class, 'create']);
Route::get('/Inmuebles/listar', [App\Http\Controllers\InmueblesController::class, 'listar']);
Route::post('/Inmuebles/guardar', [App\Http\Controllers\InmueblesController::class, 'save']);
Route::get('/Inmuebles/editar/{id}', [App\Http\Controllers\InmueblesController::class, 'edit']);
Route::post('/Inmuebles/actualizar', [App\Http\Controllers\InmueblesController::class, 'update']);
Route::get('/Inmuebles/cambiar/estado/{id}/{estado}', [App\Http\Controllers\InmueblesController::class, 'updateState']);


Route::get('/', [App\Http\Controllers\LandingController::class, 'index']);
Route::get('/Citas', [App\Http\Controllers\CitasController::class, 'index']);
Route::get('/Citas/crear', [App\Http\Controllers\CitasController::class, 'create']);
Route::get('/Citas/listar', [App\Http\Controllers\CitasController::class, 'listar']);
Route::post('/Citas/guardar', [App\Http\Controllers\CitasController::class, 'save']);
Route::get('/Citas/editar/{id}', [App\Http\Controllers\CitasController::class, 'edit']);
Route::post('/Citas/actualizar', [App\Http\Controllers\CitasController::class, 'update']);

Route::get('/Citas/informe', [App\Http\Controllers\CitasController::class, 'informe']);
Route::post('/Citas/download', [App\Http\Controllers\CitasController::class, 'download']);


Route::get('/Inmuebles/Servicios', [App\Http\Controllers\InmueblesServiciosController::class, 'index']);
Route::post('/Inmuebles/guardar2', [App\Http\Controllers\InmueblesServiciosController::class, 'save']);
Route::get('/Inmuebles/listar2', [App\Http\Controllers\InmueblesServiciosController::class, 'show']);