<?php

use App\Http\Controllers\CursoController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('dashboard');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/category/{category}', [CursoController::class, 'category'])->name('cursos.category');
