<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cadastro\ClienteController;

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
// Route::any('/clientes/search', function () {
//     echo 'Ola Mundo';
// })->name('clientes.search');

Route::any('clientes/busca_geral', [ClienteController::class, 'busca_geral'])->name('clientes.busca_geral');
Route::any('clientes/search', [ClienteController::class, 'search'])->name('clientes.search');
// Route::post('/users/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::resource('clientes', ClienteController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
