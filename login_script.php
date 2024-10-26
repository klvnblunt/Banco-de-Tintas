<?php
session_start();
include_once "conexao.php";

// Capturar e limpar os dados do formulário
$email = trim($_POST['email']);
$senha = trim($_POST['senha']);

// Verificar se o email existe no banco de dados
$sql = "SELECT * FROM usuario WHERE email = '$email'";
$result = mysqli_query($conexao, $sql);
$user = mysqli_fetch_assoc($result);
if (!$user) {
    echo "<div class='alert alert-danger text-center'>Usuário não encontrado.</div>";
} else {
    echo "<div class='alert alert-danger text-center'>Usuário encontrado, mas senha incorreta.</div>";
    var_dump($senha, $user['senha']);
    echo password_verify($senha, $user['senha']) ? 'Senha correta' : 'Senha incorreta';
}

if ($user && password_verify($senha, $user['senha'])) {
    // Login bem-sucedido, criar uma sessão para o usuário
    $_SESSION['usuario'] = $user['nome'];
    header("Location: index.php"); // Redirecionar para uma página inicial (home)
    exit;
} else {
    // Falha no login, exibir mensagem de erro
    echo "<div class='alert alert-danger text-center'>Email ou senha incorretos.</div>";
}
?>

