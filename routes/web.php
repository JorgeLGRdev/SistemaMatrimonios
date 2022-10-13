<?php

use App\Http\Controllers\DivorcioController;
use App\Http\Controllers\MatrimonioController;
use App\Http\Controllers\principalController;
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

Route::get('/', function(){

});

//Personas
Route::get('personas', [principalController::class, 'listPersonas'])->name('personas.listPersonas');
Route::get('personas/casados', [principalController::class, 'listCasados'])->name('personas.listCasados');
Route::get('personas/solteros', [principalController::class, 'listSolteros'])->name('personas.listSolteros');
Route::get('personas/divorciados', [principalController::class, 'listDivorciados'])->name('personas.listDivorciados');


Route::get('personas/create', [principalController::class, 'createPersona'])->name('personas.createPersona');
Route::post('personas', [principalController::class, 'store'])->name('personas.store');
Route::get('personas/{persona}', [principalController::class, 'show'])->name('personas.show');
Route::get('personas/{persona}/edit',  [principalController::class, 'edit'])->name('personas.edit');
Route::put('personas/{persona}',  [principalController::class, 'update'])->name('personas.update');
Route::delete('personas/{persona}',[principalController::class, 'destroy'])->name('personas.destroy');


//Matrimonios
Route::get('matrimonios', [MatrimonioController::class, 'index'])->name('matrimonios.index');
Route::get('matrimonios/create', [MatrimonioController::class, 'create'])->name('matrimonios.create');

Route::post('matrimonios', [MatrimonioController::class, 'store'])->name('matrimonios.store');
Route::get('matrimonios/{matrimonio}', [MatrimonioController::class, 'show'])->name('matrimonios.show');

Route::delete('matrimonios/{matrimonio}',[MatrimonioController::class, 'destroy'])->name('matrimonios.destroy');


//Divorcios
Route::get('divorcios', [DivorcioController::class, 'index'])->name('divorcios.index');
Route::get('divorcios/{persona}', [DivorcioController::class, 'historial'])->name('divorcios.historial');

/*
Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
Route::get('cursos/{curso}/edit',  [CursoController::class, 'edit'])->name('cursos.edit');
Route::put('cursos/{curso}',  [CursoController::class, 'update'])->name('cursos.update');
*/

