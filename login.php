<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    
    </style>
<?php

    include "conexao.php";

    if (isset($_POST['email']) && strlen($_POST['email']) > 0){
        if(!isset($_SESSION))
        session_start();
    $_SESSION['email'] = $mysqli -> escape_string ($_POST['email']);
    $_SESSION['senha'] = md5(md5($_POST['senha']));

    $sql_code = "SELECT senha, id_usuario FROM usuario WHERE email = '" . $_SESSION['email'] . "'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    $dado = $sql_query->fetch_assoc();
    $total = $sql_query->num_rows;

    if ($total == 0){
        $erro[] = "Esse email não pentence a nenhum usuario";
    }else {
        if($dado['senha'] == $_SESSION['senha']){

        $_SESSION['usuario'] = $dado['id_pessoa'];
        }else{
        $erro[] = "Senha incorreta";
        }
    }

    if(!isset($erro) || count($erro) == 0){
        echo "<script>alert('Login efetuado com sucesso'); location.href='teleinicio.php';</script>";
    }
}
?>  
</head>
  <body>
  <?php
    if (isset($erro) && count($erro) > 0) {
        foreach($erro as $msg) {
            echo "<p>$msg</p>";
        }
    }
?>

    <div class ="container">
        <div class = "row">
            <div class = "col">
                <h1>Entrar</h1>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="email"  class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value = "" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>

                <a href="index.php" class = "btn btn-info">Voltar para o inicio</a>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html