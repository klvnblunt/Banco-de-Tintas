<?php
  include('protecao.php');
?>
<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    
    </style>
  </head>
  <body>
    
  <?php 
    
        $pesquisa = $_POST['busca'] ?? '';

        include "conexao.php";

        $sql = "SELECT * FROM usuario WHERE nome LIKE '%$pesquisa%'";

        $dados = mysqli_query($conexao, $sql);
    ?>
  


    <nav class="navbar navbar-expand-lg navbar-dark bg-success border-botton shadow-sm mb-3">
        <div class="container">
        <a class="navbar-brand" href=""><img src="banco_tintas.jpg" width="50" height="50" class="d-inline-block align-top mr-2"><strong class="align-center">Banco de Tintas</strong></a>
        </div>
    </nav>
    <nav class="navbar bg-body-tertiary">
    <div class="container">
        <form class="d-flex" role="search" action="pesquisa_usuario_adm.php" method="POST">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busca">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Nascimento</th>
    </tr>
  </thead>
  <tbody>
  <?php
     

      while ($linhas = mysqli_fetch_assoc($dados)) {
        $nome = $linhas['nome'];
        $endereco = $linhas['endereco'];
        $telefone = $linhas['telefone'];
        $email = $linhas['email'];
        $data_nascimento = date('d/m/Y', strtotime($linhas['data_nacimento']));
        
        echo "<tr>
                <td>$nome</td>
                <td>$endereco</td>
                <td>$telefone</td>
                <td>$email</td>
                <td>$data_nascimento</td>
            </tr>";
      }

    ?>


   </tbody>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>