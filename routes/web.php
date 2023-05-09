<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\guardiaController;
use App\Http\Controllers\parqueoController;
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
Route::get('/menu', [userController::class,'menu'])->name('menu');

/********************************Usuario****************************************** */
Route::get('/registro_usuario',[userController::class,'ver_registrar_usuario'])->name('registro_usuario');
Route::post('/registro_usuario',[userController::class,'registrar'])->name('registro_usuario');
Route::get('/asignar_rol',[userController::class,'ver_asignar_rol'])->name('asignar_rol');
Route::post('/asignar_rol',[userController::class,'asignar_rol'])->name('asignar_rol');
Route::get('/asignar_horario',[guardiaController::class,'ver_asignar_horario'])->name('asignar_horario');
Route::post('/asignar_horario',[guardiaController::class,'asignar_horario'])->name('asignar_horario');

Route::get('/completar_perfil', [userController::class,'ver_completar_perfil'])->name('completar_perfil');
Route::post('/completar_perfil',[userController::class,'completar_perfil'])->name('perfil_completo');

Route::get('/solicitud_parqueo',[parqueoController::class,'ver_solicitar_parqueo'])->name('solicitud_parqueo');
Route::get('/registro_entrada_vehiculo',[guardiaController::class,'ver_registro_vehiculo'])->name('registro_entrada_vehiculo');
Route::get('/solicitudes', [parqueoController::class,'ver_solicitudes'])->name('solicitudes');
Route::get('/responder_solicitud',[parqueoController::class,'ver_responder_solicitud'])->name('responder_solicitud');
Route::get('/cambiar_plaza', [parqueoController::class,'ver_cambiar_parqueo'])->name('cambiar_plaza');
Route::get('/confirmacion_cambio_plaza', [parqueoController::class,'confirmacion_cambio_plaza'])->name('confirmacion_cambio_plaza');
Route::get('/registro_parqueo', [parqueoController::class,'ver_registrar_parqueo'])->name('registro_parqueo');
Route::get('/pagos_pendientes', [parqueoController::class,'pagos_pendientes'])->name('pagos_pendientes');
Route::get('/pagar_parqueo', [parqueoController::class,'ver_registro_pago'])->name('pagar_parqueo');
/**********************************login*********************************/
Route::post('/',[userController::class,'autentificacion'])->name('login');
Route::get('/logout',[userController::class,'logout'])->name('logout');
Route::get('/', function () {return view('login');})->name('login');

