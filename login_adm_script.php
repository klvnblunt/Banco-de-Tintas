<?php
session_start();
include_once "conexao.php";


$email = trim($_POST['email']);
$senha = trim($_POST['senha']);

// Verificar se o email existe no banco de dados
$sql = "SELECT * FROM usuario_adm WHERE email = '$email'";
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
    header("Location: tela_inicial_adm.php");
    exit;
} else {
    echo "<div class='alert alert-danger text-center'>Email ou senha incorretos.</div>";
}
?>

