<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testeController;


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
    return view('index');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/materias', function () {
    return view('materias');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/teste', [testeController::class , 'index']);
Route::post('/teste', [testeController::class , 'store']);

