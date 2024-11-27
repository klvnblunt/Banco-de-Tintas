<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Inicia a sessão somente se nenhuma sessão estiver ativa.
}

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
?>
