<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lutador;

class LutadorController extends Controller
{
    public function index()
        {
            $lutadores = Lutador::all();
            return view('lutadores.index', compact('lutadores'));
        }

    /**
     * Mostra o formulário para criar um novo lutador
     */
    public function create()
    {
        //
    }

    /**
     * Armazena um novo lutador
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Mostra um lutador específico
     */
    public function show($id)
    {
        //
    }

    /**
     * Mostra o formulário para editar um lutador específico
     */
    public function edit($id)
    {
        //
    }

    /**
     * Atualiza um lutador específico
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove um lutador específico
     */
    public function destroy($id)
    {

}
}
