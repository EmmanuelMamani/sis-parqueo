<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
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
Route::get('/menu', function () {return view('menu');})->name('menu');

/********************************Usuario****************************************** */
Route::get('/registro_usuario', function () {return view('registro_usuario');})->name('registro_usuario');
Route::get('/completar_perfil', function () {return view('completar_perfil');})->name('completar_perfil');
Route::get('/asignar_rol', function () {return view('asignacion_rol');})->name('asignar_rol');
Route::get('/asignar_horario', function () {return view('asignacion_horario');})->name('asignar_horario');
Route::get('/solicitud_parqueo', function () {return view('solicitud_parqueo');})->name('solicitud_parqueo');
Route::get('/registro_entrada_vehiculo', function () {return view('registro_entrada_vehiculo');})->name('registro_entrada_vehiculo');
Route::get('/solicitudes', function () {return view('solicitudes');})->name('solicitudes');
Route::get('/responder_solicitud', function () {return view('responder_solicitud');})->name('responder_solicitud');
Route::get('/cambiar_plaza', function () {return view('cambiar_plaza');})->name('cambiar_plaza');
Route::get('/confirmacion_cambio_plaza', function () {return view('confirmacion_cambio_plaza');})->name('confirmacion_cambio_plaza');
Route::get('/registro_parqueo', function () {return view('registro_parqueo');})->name('registro_parqueo');
Route::get('/pagos_pendientes', function () {return view('pagos_pendientes');})->name('pagos_pendientes');
Route::get('/pagar_parqueo', function () {return view('pagar_parqueo');})->name('pagar_parqueo');
/**********************************login*********************************/
Route::post('/',[userController::class,'autentificacion'])->name('login');
Route::get('/logout',[userController::class,'logout'])->name('logout');
Route::get('/', function () {return view('login');})->name('login');

