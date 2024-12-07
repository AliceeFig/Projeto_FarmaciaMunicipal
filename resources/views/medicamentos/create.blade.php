<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Remédio</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>

<h1>Adicionar Remédio</h1>

<form action="{{ route('medicamentos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Campo para o nome -->
    <label for="nome">Nome do Remédio:</label>
    <input type="text" name="nome" id="nome" required>

    <!-- Campo para a dosagem -->
    <label for="dosagem">Dosagem:</label>
    <input type="text" name="dosagem" id="dosagem" required>

    <!-- Campo para a quantidade em estoque -->
    <label for="quantidade_estoque">Quantidade em Estoque:</label>
    <input type="number" name="quantidade_em_estoque" id="quantidade_estoque" required>

    <!-- Campo para a descrição -->
    <label for="descricao">Descrição:</label>
    <textarea name="descricao" id="descricao" rows="4"></textarea>

    <!-- Campo para a data de validade -->
    <label for="data_validade">Data de Validade:</label>
    <input type="date" name="data_validade" id="data_validade" required>

    <!-- Campo para a categoria -->
    <label for="categoria">Categoria:</label>
    <select name="categoria" id="categoria" required>
        <option value="Analgésico">Analgésico</option>
        <option value="Antibiótico">Antibiótico</option>
        <option value="Antiinflamatório">Antiinflamatório</option>
        <option value="Outros">Outros</option>
    </select>

    <!-- Campo para a imagem -->
    <label for="imagem">Imagem:</label>
    <input type="file" name="imagem" id="imagem">

    <!-- Botão para salvar -->
    <button type="submit">Salvar Remédio</button>
    
</form>

</body>
</html>
