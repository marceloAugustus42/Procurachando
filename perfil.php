<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="./styles/perfil.css">
</head>
<body>
    <header class="cabecalho">
        <div id="LupaHeader">
            <a href="./index.php"><img src="./assets/source/LupaLogo.png" alt="Procurachando" href="index.php" width="60" height="60" class="banner"></a>
        </div>

        <nav class="botoes-cab">
            <a href="./cadastro.php"><button class="botao-cab">Cadastro</button></a>
            <a href="./login.php"><button class="botao-cab">Entrar</button></a>
            <a href="./anunciar.php"></a><button class="botao-cab">Anunciar</button></a>
        </nav>
    </header>
    <div class="container">
        <div class="profile-header">
            <img src="profile-placeholder.jpg" alt="Foto de Perfil">
            <div class="profile-info">
                <h2><?php echo $_SESSION['nome']; ?></h2>
                <p><strong>CPF:</strong> <?php echo $_SESSION['cpf']; ?></p>
                <p><strong>Data de Nascimento:</strong> <?php echo  $_SESSION['data_nascimento']; ?></p>
            </div>
        </div>

        <div class="columns">
            <div class="column">
                <h3>Histórico de Vendas</h3>
                <ul>
                    <li>Produto A - R$ 50,00</li>
                    <li>Produto B - R$ 100,00</li>
                    <li>Produto C - R$ 75,00</li>
                </ul>
            </div>

            <div class="column">
                <h3>Cupons</h3>
                <ul>
                    <li>Desconto de 10% - válido até 31/12/2025</li>
                    <li>R$ 20,00 de desconto em compras acima de R$ 150,00</li>
                    <li>Frete grátis em compras acima de R$ 200,00</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>