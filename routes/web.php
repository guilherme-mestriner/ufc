<?php
use App\Http\Controllers\LutadorController;
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
Route::get('/lutadores', [LutadorController::class, 'index'])->name('lutadores.index');

// Rota para o formulário de criação de lutadores
Route::get('/lutadores/create', [LutadorController::class, 'create'])->name('lutadores.create');

// Rota para o mostrar um lutador específico
Route::get('/lutadores/{lutador}', [LutadorController::class, 'show'])->name('lutadores.show');

// Rota para o formulário de edição de lutadores
Route::get('/lutadores/{lutador}/edit', [LutadorController::class, 'edit'])->name('lutadores.edit');

// Rota que armazena um novo lutador no banco de dados
Route::post('/lutadores', [LutadorController::class, 'store'])->name('lutadores.store');

// Rota que atualiza um lutador específico no banco de dados
Route::put('/lutadores/{lutador}', [LutadorController::class, 'update'])->name('lutadores.update');

// Rota que remove um lutador específico do banco de dados
Route::delete('/lutadores/{id}', [LutadorController::class, 'destroy'])->name('lutadores.destroy');
