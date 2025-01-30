<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurachando - Anunciar Produto</title>
    <link rel="stylesheet" href="./styles/cadastro.css">
</head>

<header class="cabecalho">
    <div id="LupaHeader">
        <a href="./index.php"><img src="./assets/source/LupaLogo.png" alt="Procurachando" href="index.php" width="60" height="60" class="banner"></a>
    </div>

    <nav class="botoes-cab">
        <button class="botao-cab"><a href="./cadastro.php">Cadastro</a></button>
        <button class="botao-cab"><a href="./login.php">Entrar</a></button>
        <button class="botao-cab"><a href="./anunciar.php">Anunciar</a></button>
    </nav>
</header>

<body>
    <form id="anunciarForm" action="conectanun.php" method="POST" enctype="multipart/form-data">
        <img src="./assets/source/Procuracchandologo1.png" alt="Procurachando" class="logo">
        <div class="background"></div>

        <input type="text" id="nome_produto" name="nome_produto" class="box" placeholder="Nome do Produto" required>
        <br><br>
        <textarea id="descricao" name="descricao" class="box" placeholder="Descrição do Produto" required></textarea>
        <br><br>
        <input type="number" id="preco" name="preco" class="box" placeholder="Preço" step="0.01" required>
        <br><br>
        <input type="text" id="vendedor" name="vendedor" class="box" placeholder="Nome do Vendedor" required>
        <br><br>
        <input type="text" id="categoria" name="categoria" class="box" placeholder="Categoria do Produto" required>
        <br><br>
        <input type="file" id="foto_prod" name="foto_prod" class="box" accept="image/*">
        <br><br>
        <button type="submit" class="buscar">Anunciar Produto</button>
    </form>

    <script>
        function validarFormulario() {
            const preco = document.getElementById('preco').value;

            // Validação simples para preço
            if (preco <= 0) {
                alert("O preço deve ser maior que zero.");
                return false;
            }

            return true;
        }

        // Adiciona validação ao formulário
        document.getElementById('anunciarForm').addEventListener('submit', function (event) {
            if (!validarFormulario()) {
                event.preventDefault(); // Impede o envio do formulário se a validação falhar
            }
        });
    </script>
</body>
</html>