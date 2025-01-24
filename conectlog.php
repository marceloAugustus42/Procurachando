<?php
    include "db_connect.php";
        
    $email= $_POST['email'];
    $senha= $_POST['senha'];

    $email = mysqli_real_escape_string($connect, $email);
    $senha = mysqli_real_escape_string($connect, $senha);
    $sql = "SELECT email, senha FROM usuario WHERE email='$email' AND senha= '$senha'";
    $retorno = mysqli_query($connect, $sql);

    if (mysqli_num_rows($retorno)==1) {
        $mensagem = "Login realizado com sucesso!";
        echo "
        <script>
            alert('$mensagem');
        </script>";
        header("Location: index.php");
        exit;
    } else{
        $mensagem = "Dados não encontrados";
        echo "
        <script>
            alert('$mensagem');
        </script>";
    }

?>