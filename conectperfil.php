<?php
session_start();

// Inclui o arquivo de conexão com o banco de dados
include "db_connect.php";

// Recupera o ID do usuário da sessão
$usuario_id = $_SESSION['id_usuario'];

// Busca informações do usuário
$sql_usuario = "SELECT nome, email, cpf, data_nascimento FROM usuario WHERE id_usuario = '$usuario_id'";
$resultado = mysqli_query($connect, $sql_usuario);

// Verifica se a consulta foi bem-sucedida
if (!$resultado) {
    die("Erro na consulta: " . mysqli_error($connect));
}

// Verifica se o usuário foi encontrado
if (mysqli_num_rows($resultado) == 1) {
    $usuario = mysqli_fetch_assoc($resultado);
    $nome = $usuario['nome'];
    $email = $usuario['email'];
    $cpf = $usuario['cpf'];
    $data_nascimento = $usuario['data_nascimento'];
} else {
    var_dump($_SESSION['id_usuario']);
    die("Usuário não encontrado.");
}

// Fecha a conexão com o banco de dados
mysqli_close($connect);
?>
