<?php
use App\Http\Controllers\LutadoresController;
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

// Rotas para o CRUD de lutadores

// Rota para a listagem de lutadores
Route::get('/lutadores', [LutadoresController::class, 'index'])->name('lutadores.index');

// Rota para o formulário de criação de lutadores
Route::get('/lutadores/create', [LutadoresController::class, 'create'])->name('lutadores.create');

// Rota para o mostrar um gato específico
Route::get('/lutadores/{id}', [LutadoresController::class, 'show'])->name('lutadores.show');

// Rota para o formulário de edição de lutadores
Route::get('/lutadores/{id}/edit', [LutadoresController::class, 'edit'])->name('lutadores.edit');

// Rota que armazena um novo gato no banco de dados
Route::post('/lutadores', [LutadoresController::class, 'store'])->name('lutadores.store');

// Rota que atualiza um gato específico no banco de dados
Route::put('/lutadores/{id}', [LutadoresController::class, 'update'])->name('lutadores.update');

// Rota que remove um gato específico do banco de dados
Route::delete('/lutadores/{id}', [LutadoresController::class, 'destroy'])->name('lutadores.destroy');
