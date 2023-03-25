<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Lutador #{{ $lutador->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>{{ $lutador->nome }} - {{ $lutador->sobrenome}}</h1>

            <h3>{{ $lutador->idade }} anos</h3>

            @if($lutador->sexo == 'F')
                <h2>Feminino</h2>
            @elseif($lutador->sexo == 'M')
                <h2>Masculino</h2>
            @endif

            <h3>{{ $lutador->peso }} Kg</h3>

            <h3>Peso-{{ $lutador->categoria }}</h3>

            <a class="btn btn--ligth" href="{{ route('lutadores.index') }}">Voltar a Lista</a>
            <a class="btn btn-warning" href="{{ route('lutadores.edit', $lutador->id) }}">Editar</a>

            <form method="POST" action="{{ route('lutadores.destroy', $lutador->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Lutador" class="btn btn-danger">
            </form>
        </div>

    </body>
</html>
