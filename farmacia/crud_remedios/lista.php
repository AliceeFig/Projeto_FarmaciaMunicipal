<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes dos Remédios</title>
    <link rel="stylesheet" href="lista.css">
</head>
<body>
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

    <div class="lista-medicamentos">
        <!-- Produto 1 -->
        <div class="medicamento-detalhes-container">
            <div class="medicamento-imagem">
                <img src="https://via.placeholder.com/150?text=Remédio" alt="Imagem do Remédio 1">
            </div>
            <div class="medicamento-info">
                <h3>Nome do Remédio 1</h3>
                <p><strong>Dosagem:</strong> 12 mg</p>
                <div class="dosagem-botoes">
                    <button>30 ml</button>
                    <button>12 mg</button>
                    <button>5 mg</button>
                </div>
                <div class="acao-botoes">
                    <button class="editar">Editar</button>
                    <button class="excluir">Excluir</button>
                </div>
            </div>
        </div>

        <!-- Produto 2 -->
        <div class="medicamento-detalhes-container">
            <div class="medicamento-imagem">
                <img src="https://via.placeholder.com/150?text=Remédio" alt="Imagem do Remédio 2">
            </div>
            <div class="medicamento-info">
                <h3>Nome do Remédio 2</h3>
                <p><strong>Dosagem:</strong> 25 mg</p>
                <div class="dosagem-botoes">
                    <button>50 ml</button>
                    <button>25 mg</button>
                    <button>10 mg</button>
                </div>
                <div class="acao-botoes">
                    <button class="editar">Editar</button>
                    <button class="excluir">Excluir</button>
                </div>
            </div>
        </div>

        <!-- Produto 3 -->
        <div class="medicamento-detalhes-container">
            <div class="medicamento-imagem">
                <img src="https://via.placeholder.com/150?text=Remédio" alt="Imagem do Remédio 3">
            </div>
            <div class="medicamento-info">
                <h3>Nome do Remédio 3</h3>
                <p><strong>Dosagem:</strong> 50 mg</p>
                <div class="dosagem-botoes">
                    <button>100 ml</button>
                    <button>50 mg</button>
                    <button>20 mg</button>
                </div>
                <div class="acao-botoes">
                    <button class="editar">Editar</button>
                    <button class="excluir">Excluir</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include 'farmacia_popular';

