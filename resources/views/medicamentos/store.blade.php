<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conexão com o banco
    $conn = new mysqli('localhost', 'root', '', 'farmacia');

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Receber os dados do formulário
    $nome = $_POST['nome'];
    $dosagem = $_POST['dosagem'];
    $quantidade_estoque = $_POST['quantidade_estoque'];
    $descricao = $_POST['descricao'];
    $data_validade = $_POST['data_validade'];
    $categoria = $_POST['categoria'];

    // Upload da imagem
    $imagem = null;
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        $imagem = 'uploads/' . basename($_FILES['imagem']['name']);
        move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
    }

    // Inserir no banco de dados
    $sql = "INSERT INTO produtos (nome, dosagem, quantidade_estoque, descricao, data_validade, categoria, imagem) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssissss', $nome, $dosagem, $quantidade_estoque, $descricao, $data_validade, $categoria, $imagem);

    if ($stmt->execute()) {
        echo "Remédio adicionado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
