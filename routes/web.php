<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthnController;
use App\Http\Controllers\EnfermeroController;
use App\Http\Controllers\ExposicionController;
use App\Http\Controllers\GuiaController;
use App\Http\Controllers\LlamadoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\TurnoController;
use App\Mail\Valoracion;
use App\Models\Exposicion;
use App\Models\Guia;
use App\Models\Paciente;
use App\Models\Ruta;
use App\Models\Turno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
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

Route::get('/dashboard', function(){
    return view('admin.dashboard');
})->name('dashboard')->middleware('auth:sanctum');

Route::get('/dashboard/pacientes', [PacienteController::class, 'index'])->name('paciente.index')->middleware('auth:sanctum');
Route::get('/dashboard/crear-paciente', [PacienteController::class, 'create'])->name('paciente.create')->middleware('auth:sanctum');
Route::post('/dashboard/crear-paciente', [PacienteController::class, 'store'])->name('paciente.store')->middleware('auth:sanctum');
Route::get('/dashboard/editar-paciente/{paciente}', [PacienteController::class, 'edit'])->name('paciente.edit')->middleware('auth:sanctum');
Route::put('/dashboard/editar-paciente/{paciente}', [PacienteController::class, 'update'])->name('paciente.update')->middleware('auth:sanctum');
Route::delete('/dashboard/eliminar-paciente/{paciente}', [PacienteController::class, 'destroy'])->name('paciente.destroy')->middleware('auth:sanctum');



Route::get('/dashboard/enfermeros', [EnfermeroController::class, 'index'])->name('enfermero.index')->middleware('auth:sanctum');
Route::get('/dashboard/crear-enfermero', [EnfermeroController::class, 'create'])->name('enfermero.create')->middleware('auth:sanctum');
Route::post('/dashboard/crear-enfermero', [EnfermeroController::class, 'store'])->name('enfermero.store')->middleware('auth:sanctum');
Route::get('/dashboard/editar-enfermero/{enfermero}', [EnfermeroController::class, 'edit'])->name('enfermero.edit')->middleware('auth:sanctum');
Route::put('/dashboard/editar-enfermero/{enfermero}', [EnfermeroController::class, 'update'])->name('enfermero.update')->middleware('auth:sanctum');
Route::delete('/dashboard/eliminar-enfermero/{enfermero}', [EnfermeroController::class, 'destroy'])->name('enfermero.destroy')->middleware('auth:sanctum');


Route::get('/dashboard/areas', [AreaController::class, 'index'])->name('area.index')->middleware('auth:sanctum');
Route::get('/dashboard/crear-area', [AreaController::class, 'create'])->name('area.create')->middleware('auth:sanctum');
Route::post('/dashboard/crear-area', [AreaController::class, 'store'])->name('area.store')->middleware('auth:sanctum');
Route::get('/dashboard/editar-area/{area}', [AreaController::class, 'edit'])->name('area.edit')->middleware('auth:sanctum');
Route::put('/dashboard/editar-area/{area}', [AreaController::class, 'update'])->name('area.update')->middleware('auth:sanctum');
Route::delete('/dashboard/eliminar-area/{area}', [AreaController::class, 'destroy'])->name('area.destroy')->middleware('auth:sanctum');


Route::get('/como-usar', function(){
    return view('como-usar');
})->name('como-usar')->middleware('auth:sanctum');


Route::get('/dashboard/usuarios', [AuthController::class, 'index'])->name('usuario.index')->middleware('auth:sanctum');
Route::get('/dashboard/crear-usuario', [AuthController::class, 'create'])->name('usuario.create')->middleware('auth:sanctum');
Route::post('/dashboard/crear-usuario', [AuthController::class, 'store'])->name('usuario.store')->middleware('auth:sanctum');
Route::get('/dashboard/editar-usuario/{usuario}', [AuthController::class, 'edit'])->name('usuario.edit')->middleware('auth:sanctum');
Route::put('/dashboard/editar-usuario/{usuario}', [AuthController::class, 'update'])->name('usuario.update')->middleware('auth:sanctum');
Route::delete('/dashboard/eliminar-usuario/{usuario}', [AuthController::class, 'destroy'])->name('usuario.destroy')->middleware('auth:sanctum');


Route::get('/escuchar-llamados', [LlamadoController::class, 'escuchar'])->name('llamado.escuchar');
Route::get('/atender-llamado/{llamado}', [LlamadoController::class, 'atender_escuchar'])->name('llamado.atender_escuchar')->middleware('auth:sanctum');

Route::get('/dashboard/llamados', [LlamadoController::class, 'index'])->name('llamado.index');
Route::get('/crear-llamado/{paciente}/{tipo}', [LlamadoController::class, 'store'])->name('llamado.store');
Route::get('/dashboard/atender-llamado/{llamado}', [LlamadoController::class, 'atender'])->name('llamado.atender')->middleware('auth:sanctum');
Route::delete('/dashboard/eliminar-llamado/{llamado}', [LlamadoController::class, 'destroy'])->name('llamado.destroy')->middleware('auth:sanctum');


Route::get('/', function(){
    return redirect()->route('dashboard');
})->middleware('auth:sanctum');

Route::get('/login', function () {
    return view('admin.login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');