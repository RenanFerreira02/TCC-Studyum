<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MateriaSerieController;
use App\Http\Controllers\ConteudoMateriaController;

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
    return view('index');
});

Route::get('/sobre', function () {
    return view('about');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/tarefas', function () {
    return view('tasklist');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/materias', [MateriaSerieController::class, 'subjectIndex'])->name('materias');

    Route::get('/materias/{id}', [ConteudoMateriaController::class, 'conteudoMateria']);

    Route::get('/adicionar', [ConteudoMateriaController::class, 'addConteudo'])->name('conteudo');

    Route::post('insertConteudo', [ConteudoMateriaController::class, 'store']);

    Route::get('/materias/{id}/{idConteudo}', [ConteudoMateriaController::class, 'conteudo']);

    Route::get('/materias/{id}/{idConteudo}/editar', [ConteudoMateriaController::class, 'edit']);

    Route::put('update/{idConteudoMateria}', [ConteudoMateriaController::class, 'update'])->name('updateConteudo');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
