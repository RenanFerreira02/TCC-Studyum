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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/forum', function () {
    return view('forum');
})->middleware(['auth', 'verified'])->name('forum');

Route::get('/tarefas', function () {
    return view('tasklist');
})->middleware(['auth', 'verified'])->name('tarefas');


Route::middleware('auth')->group(function () {
    Route::get('/materias', [MateriaSerieController::class, 'subjectIndex'])->name('showMaterias');

    Route::get('/materias/{idMateriaSerie}', [ConteudoMateriaController::class, 'conteudoMateria'])->name('showConteudosMateria');

    Route::get('/materias/{idMateriaSerie}/{idConteudoMateria}', [ConteudoMateriaController::class, 'conteudo'])->name('showConteudo');

    Route::get('/{idMateriaSerie}/adicionar', [ConteudoMateriaController::class, 'addConteudo'])->name('inserirConteudo');

    Route::post('/{idMateriaSerie}/adicionar', [ConteudoMateriaController::class, 'store'])->name('storeContent');

    Route::get('/materias/{idMateriaSerie}/{idConteudoMateria}/editar', [ConteudoMateriaController::class, 'showEdit'])->name('showEdicao');

    Route::put('/{idConteudoMateria}/editar', [ConteudoMateriaController::class, 'update'])->name('updateContent');

    Route::get('/{idConteudoMateria}/apagar', [ConteudoMateriaController::class, 'destroy'])->name('deleteContent');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
