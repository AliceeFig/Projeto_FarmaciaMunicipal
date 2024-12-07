<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Medicamento</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <div class="container">
        <h1>Editar Remédio</h1>

            <form method="POST" action="{{ route('medicamentos.update', $medicamento->id) }}">
                @csrf
                @method('PUT')

                <label for="nome">Nome do Remédio:</label>
                <input type="text" name="nome" id="nome" value="{{ $medicamento->nome }}" required>

                <label for="dosagem">Dosagem:</label>
                <input type="text" name="dosagem" id="dosagem" value="{{ $medicamento->dosagem }}" required>

                <label for="quantidade_estoque">Quantidade em Estoque:</label>
                <input type="number" name="quantidade_estoque" id="quantidade_estoque" value="{{ $medicamento->quantidade_estoque }}" required>

                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" rows="4">{{ $medicamento->descricao }}</textarea>

                <label for="data_validade">Data de Validade:</label>
                <input type="date" name="data_validade" id="data_validade" value="{{ $medicamento->data_validade }}" required>

                <label for="categoria">Categoria:</label>
                <select name="categoria" id="categoria" required>
                    <option value="Analgésico" {{ $medicamento->categoria == 'Analgésico' ? 'selected' : '' }}>Analgésico</option>
                    <option value="Antibiótico" {{ $medicamento->categoria == 'Antibiótico' ? 'selected' : '' }}>Antibiótico</option>
                    <option value="Antiinflamatório" {{ $medicamento->categoria == 'Antiinflamatório' ? 'selected' : '' }}>Antiinflamatório</option>
                    <option value="Outros" {{ $medicamento->categoria == 'Outros' ? 'selected' : '' }}>Outros</option>
                </select>

                <button type="submit">Salvar Alterações</button>
                <button type="button" class="cancelar" onclick="window.location='{{ route('medicamentos.index') }}'">Cancelar</button>
        </form>
    </div>
</body>
</html>
