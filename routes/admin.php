<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\CursoController;
use App\Http\Controllers\Admin\EstudianteController;
use App\Http\Controllers\Admin\ProfesorController;
use App\Http\Controllers\Admin\CursoestudianteController;
use App\Http\Controllers\Admin\NotaController;
use App\Models\Nota;

Route::get('', [HomeController::class, 'home'])->name('admin.home');


Route::get('categorias/inactivos', [CategoryController::class, 'inactivos'])->name('admin.categorias.inactivos');
Route::put('categorias/{categoria}/desactivar', [CategoryController::class, 'desactivar'])->name('admin.categorias.desactivar');
Route::put('categorias/{categoria}/activar', [CategoryController::class, 'activar'])->name('admin.categorias.activar');
Route::resource('categorias', CategoryController::class)->names('admin.categorias');



// cursos
Route::get('cursos/{curso}/lista', [CursoController::class, 'lista'])->name('admin.cursos.lista');
Route::get('cursos/{curso}/agregar', [CursoController::class, 'agregarEstudianteVista'])->name('admin.cursos.agregarEstudianteVista');
Route::put('cursos/{curso}/agregar/{estudiante}', [CursoController::class, 'agregarEstudiante'])->name('admin.cursos.agregarEstudiante');

Route::get('cursos/inactivos', [CursoController::class, 'inactivos'])->name('admin.cursos.inactivos');
Route::put('cursos/{curso}/desactivar', [CursoController::class, 'desactivar'])->name('admin.cursos.desactivar');
Route::put('cursos/{curso}/activar', [CursoController::class, 'activar'])->name('admin.cursos.activar');
Route::resource('cursos', CursoController::class)->names('admin.cursos');

//profesores
Route::get('profesores/inactivos', [ProfesorController::class, 'inactivos'])->name('admin.profesores.inactivos');
Route::put('profesores/{profesor}/desactivar', [ProfesorController::class, 'desactivar'])->name('admin.profesores.desactivar');
Route::put('profesores/{profesor}/activar', [ProfesorController::class, 'activar'])->name('admin.profesores.activar');
Route::resource('profesores', ProfesorController::class)->names('admin.profesores');


//Estudiantes
Route::get('estudiantes/inactivos', [EstudianteController::class, 'inactivos'])->name('admin.estudiantes.inactivos');
Route::put('estudiantes/{estudiante}/desactivar', [EstudianteController::class, 'desactivar'])->name('admin.estudiantes.desactivar');
Route::put('estudiantes/{estudiante}/activar', [EstudianteController::class, 'activar'])->name('admin.estudiantes.activar');
Route::resource('estudiantes', EstudianteController::class)->names('admin.estudiantes');


// Estudiantescurso

Route::get('cursoestudiantes/{cursoestudiante}', [CursoestudianteController::class, 'agregar'])->name('admin.cursoestudiantes.agregar');
Route::get('cursoestudiantes/{cursoestudiante}/lista', [CursoestudianteController::class, 'lista'])->name('admin.cursoestudiantes.lista');


//notas
Route::get('notas/crear/{listaDeEstudiante}', [NotaController::class, 'crear'])->name('admin.notas.crear');
Route::post('notas/crear/{listaDeEstudiante}/agregar', [NotaController::class, 'agregar'])->name('admin.notas.agregar');
Route::resource('notas', NotaController::class)->names('admin.notas');
