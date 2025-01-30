<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurachando</title>
    <link rel="stylesheet" href="./styles/homepage.css">
</head>

<header class="cabecalho">

    <div id="LupaHeader">
    <img src="./assets/source/LupaLogo.png" alt="Procurachando" href="index.php" width="60" height="60" class="banner" > <!--Não consegui dimensionar no css por algum motivo e dimensionar a imagem aqui funcionou(???) -->
    </div>

    <nav class="botoes-cab">
        <button class="botao-cab"><a href="./cadastro.php">Cadastro</a></button>
        <button class="botao-cab"><a href="./login.php">Entrar</a></button>
        <button class="botao-cab"><a href="./anunciar.php">Anunciar</a></button>
    </nav>
</header>

<body>
    <!--BANNER-->
    <div id="img-responsiva"> <!--Div pra deixar o banner responsivo -->
        <img src="./assets/source/VER AGORA.png" alt="Banner de fundo" >
      </div>
    <form>
        <div class="background"></div>
        <input type="text" class="buscar" placeholder="Buscar por um produto...">
    </form>

    <!--CATEGORIAS-->
    <h2 id="titulos">Categorias:</h2>
    <nav class="botoes-cat">
        <button class="botao-cat"><a href="/"><img src="./assets/source/celulares.png" alt="Celulares">Celulares</a></button>
        <button class="botao-cat"><a href="/"><img src="./assets/source/instrumentos.png" alt="Instrumentos">Instrumentos</a></button>
        <button class="botao-cat"><a href="/"><img src="./assets/source/esportes.png" alt="Esportes">Esportes</a></button>
        <button class="botao-cat"><a href="/"><img src="./assets/source/eletronicos.png" alt="Eletronicos">Eletronicos</a></button>
        <button class="botao-cat"><a href="/"><img src="./assets/source/moveis.png" alt="Moveis">Moveis</a></button>
    </nav>

    <!--PRODUTOS-->
    <h2 id="titulos">Produtos:</h2>
    <div class="container-de-anuncio-princal">
        <a href="./assets/itens/itemps5.html" class="image-item-link">
            <div class="image-item">
                <img src="./assets/source/produtos/ps5.jpeg" alt="Imagem 1" class="ajuste-imagem">
                <p class="ajuste-texto">Playstation 5</p>
            </div>
        </a>
        <a href="./assets/itens/itembike.html" class="image-item-link">
            <div class="image-item">
                <img src="./assets/source/produtos/bike.jpeg" alt="Imagem 2" class="ajuste-imagem">
                <p class="ajuste-texto">Bicicleta</p>
            </div>
        </a>
        <a href="./assets/itens/itembola.html" class="image-item-link">
            <div class="image-item">
                <img src="./assets/source/produtos/baisebol.jpg" alt="Imagem 2" class="ajuste-imagem">
                <p class="ajuste-texto">Bola de baseball</p>
            </div>
        </a>
    </div>
    <div class="container-de-anuncio-princal">
        <a href="./assets/itens/itemguit.html" class="image-item-link">
            <div class="image-item">
                <img src="./assets/source/produtos/guitarra.jpg" alt="Imagem 1" class="ajuste-imagem">
                <p class="ajuste-texto">Guitarra</p>
            </div>
        </a>
        <a href="./assets/itens/itemnote.html" class="image-item-link">
            <div class="image-item">
                <img src="./assets/source/produtos/notebook.jpg" alt="Imagem 2" class="ajuste-imagem">
                <p class="ajuste-texto">Notebook</p>
            </div>
        </a>
        <a href="./assets/itens/itemtecl.html" class="image-item-link">
            <div class="image-item">
                <img src="./assets/source/produtos/teclado.jpg" alt="Imagem 2" class="ajuste-imagem">
                <p class="ajuste-texto">Teclado</p>
            </div>
        </a>
    </div>

</body>
<!--RODAPÉ-->
<footer class="rodape">
    <div class="info">
	    <p>&copy; 2024 - Todos os direitos reservados</p>
	    <p>Entre em contato pelo e-mail: procurachando@gmail.com</p>
    </div>
    <div class="sobre">
	    <nav>
		    <ul>
			    <li><a href="#">Termos de uso</a></li>
			    <li><a href="#">Política de privacidade</a></li>
			    <li><a href="#">Sobre nós</a></li>
		    </ul>
	    </nav>
    </div>
</footer>

</html>