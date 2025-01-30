<?php
    session_start();
    include "db_connect.php";
        
    $nome= $_POST['nome_produto'];
    $desc= $_POST['descricao'];
    $preco= $_POST['preco'];
    $vendedor= $_POST['vendedor'];
    $categoria= $_POST['categoria'];
    $foto_prod= $_POST['foto_prod'];
    $id= $_SESSION['id_usuario'];

    $sql= "INSERT INTO produto(nome, descricao, preco, vendedor, categoria, foto_prod, id_usuario)
         VALUES('$nome', '$desc', '$preco', '$vendedor', '$categoria', '$foto_prod', '$id')";

    if (mysqli_query($connect, $sql)) {
        $mensagem =  "Produto cadastrado!";
        echo "
        <script>
            alert('$mensagem');
        </script>";
        sleep(2);
        header("Location: index.php");
        exit();
    }else{
        echo "ERRO ".mysqli_connect_error();
    }

?>