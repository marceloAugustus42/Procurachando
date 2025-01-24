<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Procurachando</title>
        <link rel="stylesheet" href="./styles/login.css">
    </head>
    
    <body>
        <header class="cabecalho">
            <div id="LupaHeader">
                <a href="./index.php"><img src="./assets/source/LupaLogo.png" alt="Procurachando" href="index.php" width="60" height="60" class="banner"></a>
            </div>

            <nav class="botoes-cab">
                <a href="./cadastro.php"><button class="botao-cab">Cadastro</button></a>
                <a href="./login.php"><button class="botao-cab">Entrar</button></a>
                <a href="/"></a><button class="botao-cab">Anunciar</button></a>
            </nav>
        </header>

        <form id="loginForm" action="conectlog.php" method="POST">
            <img src="./assets/source/Procuracchandologo1.png" alt="Procurachando" href="index.php" class="logo">
            <div class="background"></div>
            <input type="text" id="loginEmail" name="email" class="box" placeholder="Email">
            <br><br>
            <input type="password" id="loginSenha" name="senha" class="box" placeholder="Senha">
            <br><br>
            <div class="salvar">
                <input type="radio">
                <p>Salvar senha</p>
            </div>
            <button type="submit" class="buscar">Entrar</button>
        </form>

        <script>
            function login(event) {
                event.preventDefault(); 
    
                var loginEmail = document.getElementById('loginEmail').value;
                var loginSenha = document.getElementById('loginSenha').value;

                var storedEmail = localStorage.getItem('email');
                var storedSenha = localStorage.getItem('senha');

                if (loginEmail === storedEmail && loginSenha === storedSenha) {
                    alert("Login bem-sucedido! Bem-vindo de volta!");
                    window.location.href = "index.php";
                } else {
                    alert("Email ou senha incorretos. Tente novamente.");
                }

                document.getElementById('loginForm').reset(); 
                }
        </script>
    </body>
</html>