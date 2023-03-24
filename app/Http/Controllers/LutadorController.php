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
        return view('lutadores.create');
    }

    /**
     * Armazena um novo lutador
     */
    public function store(Request $requisicao)
    {
        //Cria um novo obvjeto do tipo Lutador em branco
        $lutadores = new Lutador();

        //Preenche os campos do objeto com os dados da requisição
        $lutadores->nome = $requisicao->nome;
        $lutadores->sobrenome = $requisicao->sobrenome;
        $lutadores->idade = $requisicao->idade;
        $lutadores->sexo = $requisicao->sexo;
        $lutadores->peso = $requisicao->peso;
        $lutadores->categoria = $requisicao->categoria;

        //Salva o objeto no banco de dados
        $lutadores->save();

        //Redireciona para a página de detalhes do lutador
        return redirect()->route('lutadores.show', $lutadores->id);
    }

    /**
     * Mostra um lutador específico
     */
    public function show(Lutador $lutador)
    {
        //Retorna a view lutadores.view com o objeto $lutadores
        return view('lutadores.view', compact('lutador'));
    }

    /**
     * Mostra o formulário para editar um lutador específico
     */
    public function edit(Lutador $Lutador)
    {
        //Retorna a view lutadores.edit com o objeto $lutador
        return view('lutadores.edit', compact('lutador'));
    }

    /**
     * Atualiza um lutador específico
     */
    public function update(Request $requisicao, Lutador $Lutador)
    {
        //Atualiza o objeto com os dados da requisição
        $Lutador->update($requisicao->all());

        //Redireciona para a página de detalhes do gato
        return redirect()->route('lutadores.show', $Lutador->id);
    }

    /**
     * Remove um lutador específico
     */
    public function destroy($id)
    {
        //
    }
}
