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

    Route::get('/materias/{idMateriaSerie}', [ConteudoMateriaController::class, 'conteudoMateria'])->name('conteudoMateria');

    Route::get('/materias/{idMateriaSerie}/{idConteudoMateria}', [ConteudoMateriaController::class, 'conteudo'])->name('conteudo');

    Route::get('/adicionar', [ConteudoMateriaController::class, 'addConteudo'])->name('addConteudo');

    Route::post('insertConteudo', [ConteudoMateriaController::class, 'store']);

    Route::get('/materias/{idMateriaSerie}/{idConteudoMateria}/editar', [ConteudoMateriaController::class, 'showEdit']);

    Route::put('/{idConteudoMateria}/editar', [ConteudoMateriaController::class, 'update']);

    Route::get('/{idConteudoMateria}/apagar', [ConteudoMateriaController::class, 'destroy']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
