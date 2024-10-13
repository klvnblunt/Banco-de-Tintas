<?php
$host = 'localhost';
$user = 'root';
$password = 'jH@c69MC1['; // Se não houver senha
$database = 'cadastro_tinta';

$conexao = mysqli_connect($host, $user, $password, $database);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

function mensagem($texto, $tipo) {
    echo "<div class= 'alert alert-$tipo' role='alert'>
            $texto
        </div>";
}
?>
