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

Route::get('/',function(){
    return "holamundo";
});

Route::post('/agregarEstudiante',[App\Http\Controllers\EstudianteController::class,"agregarEstudiante"]);
Route::post('/agregarTutor',[App\Http\Controllers\TutorController::class,"agregarTutor"]);
Route::post('/asignar-tutor', [App\Http\Controllers\AsignarTutorController::class,"asignarTutor"]);
Route::post('/agregarRegistro',[App\Http\Controllers\RegistroController::class,"agregarRegistro"]);
Route::post('/agregarCurso',[App\Http\Controllers\CursoController::class,"agregarCurso"]);
Route::post('/agregarGrupo',[App\Http\Controllers\GrupoController::class,"agregarGrupo"]);
Route::post('/agregarCursoInscrito',[App\Http\Controllers\CursoInscritoController::class,"agregarCursoInscrito"]);
Route::post('/agregarGrupoInscrito',[App\Http\Controllers\GrupoInscritoController::class,"agregarGrupoInscrito"]);

Route::get('/obtenerEstudiantes',[App\Http\Controllers\EstudianteController::class,"show"]);
Route::get('/obtenerTutor/{id}', [App\Http\Controllers\TutorController::class,"buscarTutor"]);
Route::get('/obtenerEstudiante/{id}',[App\Http\Controllers\EstudianteController::class,"buscarEstudiante"]);
Route::get('/obtenerTutores',[App\Http\Controllers\TutorController::class,"show"]);
Route::get('/obtenerCursos',[App\Http\Controllers\CursoController::class,"show"]);
Route::get('/obtenerCurso/{id}',[App\Http\Controllers\CursoController::class,"buscarCurso"]);
Route::get('/obtenerGrupo/{id}',[App\Http\Controllers\GrupoController::class,"buscarGrupo"]);
Route::get('/obtenerGrupoNombre/{id}',[App\Http\Controllers\GrupoController::class,"buscarGrupoNombre"]);

Route::put('/actualizarEstudiante/{id}', [App\Http\Controllers\EstudianteController::class,"update"]);
Route::put('/acutalizarEstadoTutor/{id}', [App\Http\Controllers\TutorController::class,"actualizarDato"]);
