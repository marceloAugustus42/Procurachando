<?php
    session_start();
    include "db_connect.php";
        
    $email= $_POST['email'];
    $senha= $_POST['senha'];

    $email = mysqli_real_escape_string($connect, $email);
    $sql = "SELECT email, senha, id_usuario, nome, cpf, data_nascimento FROM usuario WHERE email='$email'";
    $retorno = mysqli_query($connect, $sql);

    
    if (mysqli_num_rows($retorno)==1) {
        $usuario = mysqli_fetch_assoc($retorno);

    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['cpf'] = $usuario['cpf'];
        $_SESSION['data_nascimento'] = $usuario['data_nascimento'];
        $mensagem = "Login realizado com sucesso!";
        echo "
        <script>
            alert('$mensagem');
        </script>";
        header("Location: perfil.php");
        exit;
    } else {
        $mensagem = "Senha incorreta!";
        echo "
        <script>
            alert('$mensagem');
        </script>";
    }
} else {
    $mensagem = "E-mail não encontrado!";
    echo "
    <script>
        alert('$mensagem');
    </script>";
}

?>