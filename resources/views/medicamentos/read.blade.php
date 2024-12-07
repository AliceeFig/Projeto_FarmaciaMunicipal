<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Medicamentos</title>
    <link rel="stylesheet" href="{{ asset('css/read.css') }}">
</head>
<body>
    <h1>Lista de Medicamentos</h1>

    <!-- Barra de pesquisa -->
    <form method="GET" action="{{ route('medicamentos.index') }}">
        <input type="text" name="search" placeholder="Pesquisar medicamento" value="{{ request()->query('search') }}">
        <button type="submit">Pesquisar</button>
    </form>

    <!-- Lista de medicamentos -->
    <table border="1">
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Dosagem</th>
                <th>Quantidade em Estoque</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($medicamentos as $medicamento)
                <tr>
                    <td>
                        @if ($medicamento->imagem)
                            <img src="{{ asset('storage/' . $medicamento->imagem) }}" alt="{{ $medicamento->nome }}" width="100">
                        @else
                            Sem imagem
                        @endif
                    </td>
                    <td>{{ $medicamento->nome }}</td>
                    <td>{{ $medicamento->dosagem }}</td>
                    <td>{{ $medicamento->quantidade_em_estoque }}</td>
                    <td>
                        <a href="{{ route('medicamentos.edit', $medicamento->id) }}">Editar</a>
                        <form action="{{ route('medicamentos.destroy', $medicamento->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete(this)">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Nenhum medicamento encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <script>
        function confirmDelete(button) {
            if (confirm('Tem certeza que deseja excluir este remédio?')) {
                button.closest('form').submit();
            }
        }
    </script>
</body>
</html>
