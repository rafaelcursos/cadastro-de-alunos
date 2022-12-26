<?php

use Illuminate\Support\Facades\Auth;
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
    return view('/auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/alunos/ver/{id}', [App\Http\Controllers\AlunoController::class, 'find'])->middleware('auth');
Route::get('/alunos/criar', [App\Http\Controllers\AlunoController::class, 'create'])->middleware('auth');
Route::post('/alunos/criar', [App\Http\Controllers\AlunoController::class, 'store'])->middleware('auth');
Route::get('/alunos/update/{id}', [\App\Http\Controllers\AlunoController::class, 'update'])->middleware('auth');
Route::post('/alunos/update/{id}', [\App\Http\Controllers\AlunoController::class, 'updateAction'])->middleware('auth');
Route::delete('alunos/delete/{id}', [App\Http\Controllers\AlunoController::class, 'destroy'])->middleware('auth');

Route::get('/alunos/pagar/{id}', [App\Http\Controllers\PagamentoController::class, 'index'])->middleware('auth');
Route::post('/alunos/pagar/{id}', [App\Http\Controllers\PagamentoController::class, 'store'])->middleware('auth');

Route::get('/mensalidade/home', [App\Http\Controllers\MensalidadeController::class, 'index'])->middleware('auth');
Route::post('/mensalidade/create/{id}', [App\Http\Controllers\MensalidadeController::class, 'store'])->middleware('auth');

Route::get('/curso/home', [App\Http\Controllers\CursoController::class, 'index'])->middleware('auth');
Route::get('/curso/criar', [App\Http\Controllers\CursoController::class, 'create'])->middleware('auth');
Route::post('/curso/criar', [App\Http\Controllers\CursoController::class, 'store'])->middleware('auth');
Route::get('/curso/ver/{id}', [App\Http\Controllers\CursoController::class, 'find'])->middleware('auth');

Route::get('/curso_aluno/{id}', [App\Http\Controllers\CursoController::class, 'cursoAluno'])->middleware('auth');
Route::post('/curso_aluno/{id}', [App\Http\Controllers\CursoController::class, 'cursoAlunoInsert'])->middleware('auth');

Route::get('/dia_aluno/{id}', [App\Http\Controllers\DiaController::class, 'diaAluno'])->middleware('auth');
Route::post('/dia_aluno/{id}', [App\Http\Controllers\DiaController::class, 'diaAlunoInsert'])->middleware('auth');

Route::get('/horario_aluno/{id}', [App\Http\Controllers\HorarioController::class, 'horarioAluno'])->middleware('auth');
Route::post('/horario_aluno/{id}', [App\Http\Controllers\HorarioController::class, 'horarioAlunoInsert'])->middleware('auth');
