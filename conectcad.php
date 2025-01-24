<?php
    include "db_connect.php";
        
    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $telefone= $_POST['telefone'];
    $cpf= $_POST['cpf'];
    $nascimento= $_POST['nascimento'];
    $senha= $_POST['senha'];

    $cpf = mysqli_real_escape_string($connect, $cpf);
    $senha = mysqli_real_escape_string($connect, $senha);
    $sql1 = "SELECT cpf FROM usuario WHERE cpf='$cpf'";
    $sql2 = "SELECT senha FROM usuario WHERE senha= '$senha'";
    $retorno1 = mysqli_query($connect, $sql1);
    $retorno2 = mysqli_query($connect, $sql2);

    if (mysqli_num_rows($retorno1)>0 || mysqli_num_rows($retorno2)>0) {
        $mensagem = "DADOS RECUSADOS, CPF OU SENHA JÁ CADASTRADOS!";
        echo "
        <script>
            alert('$mensagem');
        </script>";
        sleep(5);
        header("Location: cadastro.php");
        exit;
    }

    $sql= "INSERT INTO usuario(nome, senha, email, telefone_contato, data_nascimento, cpf)
         VALUES('$nome', '$senha', '$email', '$telefone', '$nascimento', '$cpf')";

    if (mysqli_query($connect, $sql)) {
        $mensagem =  "Usuario cadastrado!";
        echo "
        <script>
            alert('$mensagem');
        </script>";
        sleep(2);
        header("Location: login.php");
        exit();
    }else{
        echo "ERRO ".mysqli_connect_error();
    }

?>
