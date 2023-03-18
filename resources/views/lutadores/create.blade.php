<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Cadastro Lutador</title>
    </head>
    <body>
        <div class="container mb-3">
            <h1>Novo Lutador</h1>

        <form method="POST" action="{{ route('lutadores.store') }}">
            @csrf

            <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control">
            </div>

            <div class="mb-3">
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control">
            </div>

            <div class="mb-3">
                <label>Idade</label>
                <input type="number" name="idade" class="form-control">
            </div>

            <div class="mb-3">
                <label>Sexo</label>
                <select name="sexo" class="form-control">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Peso</label>
                <input type="text" name="peso" class="form-control">
            </div>

            <div class="mb-3">
                <label>Categoria</label>
                <input type="text" name="categoria" class="form-control">
            </div>

        <div>
            <input type="submit" value="Registrar Lutador" class="btn btn-primary">
        </div>
        </form>
        </div>
    </body>
    </html>
