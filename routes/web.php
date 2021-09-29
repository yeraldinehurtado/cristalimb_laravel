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
Route::get('/quienessomos', [App\Http\Controllers\LandingController::class, 'quienessomos']);
Route::get('/servicios', [App\Http\Controllers\LandingController::class, 'servicios']);
Route::get('/agendarcita', [App\Http\Controllers\LandingController::class, 'agendarcita']);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/Propietarios', [App\Http\Controllers\PropietariosController::class, 'index']);
Route::get('/Propietarios/crear', [App\Http\Controllers\PropietariosController::class, 'create']);
Route::get('/Propietarios/listar', [App\Http\Controllers\PropietariosController::class, 'listar']);
Route::post('/Propietarios/guardar', [App\Http\Controllers\PropietariosController::class, 'save']);
Route::get('/Propietarios/editar/{id}', [App\Http\Controllers\PropietariosController::class, 'edit']);
Route::post('/Propietarios/actualizar', [App\Http\Controllers\PropietariosController::class, 'update']);
Route::get('/Propietarios/cambiar/estado/{id}/{estado}', [App\Http\Controllers\PropietariosController::class, 'updateState']);
