<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos',[AlumnosController::class,'index'])->name("index");
Route::post('/alumnos',[AlumnosController::class,'insertar'])->name("insertar");
Route::get('/alumnos/crear',[AlumnosController::class,'crear'])->name("crear");
Route::get('/alumnos/editar',[AlumnosController::class,'editar'])->name("editar");
Route::get('/alumnos/{id}/borrar',[AlumnosController::class,'borrar'])->name("borrar");
Route::delete('/alumnos/{id}',[AlumnosController::class,'confirm_del'])->name("confirm_del");

