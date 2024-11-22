<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Remédios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Barra fixa superior -->
    <div class="navbar">
        <div class="logo" onclick="toggleSidebar()">
            <img class="logo" src="../images/LogoEmpresa.png" alt="" />

        </div>
        <div class="nav-buttons">
            <button>Início</button>
            <button>Estoques</button>
            <button>Relatórios</button>
            <div class="notification">
                <span class="notification-icon">🔔</span>
                <span class="notification-count">3</span>
            </div>
        </div>
    </div>

    <!-- Barra lateral escondida -->
    <div class="sidebar" id="sidebar">
        <ul>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Configurações</a></li>
            <li><a href="#">Ajuda</a></li>
            <li><a href="#">Sair</a></li>
        </ul>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
        }
    </script>

    <div class="title-balloon">
        <h2>Cadastro de Remédios</h2>
    </div>

    <div class="form-container">
        <div class="form-content">
            <form action="#" method="post" enctype="multipart/form-data">
                <label for="nome">Nome do Remédio:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="dosagem">Dosagem:</label>
                <input type="text" id="dosagem" name="dosagem" required>

                <label for="descricao">Descrição:</label>
                <input type="text" id="descricao" name="descricao" required>

                <label for="quantidade">Quantidade em Estoque:</label>
                <input type="number" id="quantidade" name="quantidade" required>

                <label for="data_validade">Data de validade:</label>
                <input type="date" id="data_validade" name="data_validade" required>

                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria" required>

                <label for="criado_em">Adicionado em:</label>
                <input type="criado_em" id="criado_em" name="criado_em" required>

                <button type="submit">Cadastrar</button>
            </form>

            <div class="image-upload">
                <div class="image-preview" id="imagePreview">
                    <span>Nenhuma imagem selecionada</span>
                </div>
                <label for="imagem" class="upload-button">Adicionar Imagem</label>
                <input type="file" id="imagem" name="imagem" accept="image/*" required hidden onchange="previewImage(event)">
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const previewContainer = document.getElementById('imagePreview');
            previewContainer.innerHTML = '';
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = 'Imagem selecionada';
                    img.style.maxWidth = '100%';
                    img.style.maxHeight = '100%';
                    previewContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            } else {
                previewContainer.innerHTML = '<span>Nenhuma imagem selecionada</span>';
            }
        }
    </script>
</body>
</html>


<?php
include 'farmacia_popular';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $dosagem = $_POST['dosagem'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $data_validade = $_POST['data_validade'];
    $categoria = $_POST['categoria'];
    $criado_em = $_POST['criado_em'];

    $smt = $pdo->prepare("INSERT INTO medicamentos (nome,dosagem, descricao, quantidade, data_validade, categoria, criado em) VALUES (?, ?)");
    $smt->execute([$nome, $dosagem, $descricao, $quantidade, $data_validade, $categoria, $criado_em]);

    header("Location: index.php");
}
?>