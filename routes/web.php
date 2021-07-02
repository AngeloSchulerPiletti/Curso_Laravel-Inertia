<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\RoutesController;

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
    return Inertia::render('Home');
})->name('casa');

Route::get('/sobre', function () {
    return Inertia::render('Sobre');
})->name('sobre.show');

Route::get('/receitas', function () {
    return Inertia::render('Receitas');
})->name('receitas.show');

Route::get('/pesquisa', function () {
    return Inertia::render('Pesquisa');
})->name('pesquisa.show');


// Route::middleware('mineauth')->get('/about', [RoutesController::class, 'sobre']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');

