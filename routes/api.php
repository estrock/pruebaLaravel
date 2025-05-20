<?php

use App\Http\Controllers\tareasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::get('/prueba',function(){
    return 'LLega la peticion';
});

// Esta es la ruta para consultar todas las tareas
Route::get('/tareas',[tareasController::class, 'index']);

// Ruta para consultar una tarea individual
Route::get('/tareas/{id}',[tareasController::class, 'one']);

// Ruta para crear/registrar una tarea
Route::post('/tareas',[tareasController::class, 'save']);

// Ruta para actualizar un registro:
Route::patch('/tareas/{id}',[tareasController::class, 'patch']);

// Esta es la ruta para eliminar un registro:
Route::delete('/tareas/{id}',[tareasController::class, 'delete']);