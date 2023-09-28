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

Route::get('/obtenerTodo',[App\Http\Controllers\EstudianteController::class,"show"]);
Route::get('/obtenerTutor/{id}', [App\Http\Controllers\TutorController::class,"buscarTutor"]);
