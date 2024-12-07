<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Medicamento</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>
<body>
    <h1>Detalhes do Medicamento</h1>

    <p><strong>Nome:</strong> {{ $medicamento->nome }}</p>
    <p><strong>Dosagem:</strong> {{ $medicamento->dosagem }}</p>
    <p><strong>Quantidade em Estoque:</strong> {{ $medicamento->quantidade_em_estoque }}</p>
    <p><strong>Descrição:</strong> {{ $medicamento->descricao }}</p>
    <p><strong>Data de Validade:</strong> {{ $medicamento->data_validade }}</p>
    <p><strong>Categoria:</strong> {{ $medicamento->categoria }}</p>

    @if($medicamento->imagem)
        <p><strong>Imagem:</strong></p>
        <img src="{{ asset('storage/' . $medicamento->imagem) }}" alt="Imagem do Medicamento">
    @endif
    <input type="button" value="Voltar ao Início" onclick="window.location='/'" />

</body>
</html>
