<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lutador extends Model
{
    use HasFactory;

    // Indica o nome da tabela do banco de dados
    protected $table = "lutadores";

    // Indica os campos que podem ser preenchidos pelo usuário
    protected $fillable = [
        'nome',
        'sobrenome',
        'idade',
        'sexo',
        'peso',
        'categria',
        'foto'
    ];
}
