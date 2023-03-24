<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Gato #{{ $gato->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>Edição do gato {{ $gato->id }}</h1>

            <form method="POST" action="{{ route('gatos.update', $gato->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ $Lutador->nome }}">
                </div>

                <div class="mb-3">
                    <label>Sobrenome</label>
                    <input type="text" name="sobrenome" class="form-control" value="{{ $Lutador->sobrenome }}">
                </div>

                <div class="mb-3">
                    <label>Idade</label>
                    <input type="number" name="idade" class="form-control" value="{{ $Lutador->idade }}">
                </div>

                <div class="mb-3">
                    <label>Sexo</label>
                    <select name="sexo" class="form-control">
                        <option value="M" {{ $Lutador->sexo == 'M' ? 'selected' : '' }}>Menino</option>
                        <option value="F" {{ $Lutador->sexo == 'F' ? 'selected' : '' }}>Menina</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Peso</label>
                    <input type="number" name="peso" class="form-control" value="{{ $Lutador->peso }}">
                </div>

                <div class="mb-3">
                    <label>Categoria</label>
                    <input type="text" name="categoria" class="form-control" value="{{ $Lutador->categoria }}">
                </div>

                <div>
                    <input type="submit" value="Atualizar Lutador" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
