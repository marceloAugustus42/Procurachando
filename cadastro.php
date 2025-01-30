<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Procurachando</title>
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
        <form id="cadastroForm" action="conectcad.php" method="POST" >
            <img src="./assets/source/Procuracchandologo1.png" alt="Procurachando" class="logo">
            <div class="background"></div>
                
            <input type="text" id="nome" name="nome" class="box" placeholder="Nome" required>
            <br><br>
            <input type="email" id="email" name="email" class="box" placeholder="Email" required>
            <br><br>
            <input type="text" id="telefone" name="telefone" class="box" placeholder="Telefone" required>
            <br><br>
            <input type="text" id="cpf" name="cpf" class="box" placeholder="CPF" required>
            <br><br>
            <input type="date" id="nascimento" name="nascimento" class="box" placeholder="Nascimento" required>
            <br><br>
            <input type="password" id="senha" name="senha" class="box" placeholder="Senha" required>
            <br><br>
            <input type="password" id="confirmeSenha" name="senhac" class="box" placeholder="Confirme sua senha" required>
            <br><br>    
            <button type="submit" class="buscar">Cadastrar</button>
        </form>
        
        <script>
            function cadastrar() {
                
                var nome = document.getElementById('nome').value;
                var email = document.getElementById('email').value;
                var senha = document.getElementById('senha').value;
                var confirmeSenha = document.getElementById('confirmeSenha').value;
    
                if (senha !== confirmeSenha) {
                    alert("As senhas não correspondem.");
                    return;
                }

                localStorage.setItem('nome', nome);
                localStorage.setItem('email', email);
                localStorage.setItem('senha', senha);

                alert(nome + " agora está cadastrado!");
                document.getElementById('cadastroForm').reset();

                window.location.href = "login.php";
            }
        </script>
    </body>
    
</html>