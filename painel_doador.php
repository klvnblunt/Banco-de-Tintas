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
    <nav class="navbar navbar-expand-lg navbar-dark bg-success border-botton shadow-sm mb-3">
        <div class="container">
        <a class="navbar-brand" href=""><img src="banco_tintas.jpg" width="50" height="50" class="d-inline-block align-top mr-2"><strong class="align-center">Banco de Tintas</strong></a>
        </div>
    </nav>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Data de Validade</th>
      <th scope="col">Quantidade de Tinta</th>
      <th scope="col">Quantidade de Latas</th>
      <th scope="col">Cor</th>
      <th scope="col">Tipo de Tinta</th>
      <th scope="col">Tamanho da Lata</th>
      <th scope="col">Marca</th>
    </tr>
  </thead>
  <tbody>
  <?php
      include_once "conexao.php";
      $sql = 'SELECT * FROM doacao';
      $doacao = mysqli_query($conexao, $sql);

      while ($linhas = mysqli_fetch_assoc($doacao)) {
        $data_validade = date('d/m/Y', strtotime($linhas['data_validade']));
        $qt_litro = $linhas['qt_litro'];
        $qt_latas = $linhas['qt_latas'];
        $cor = $linhas['cor'];
        $tipo = $linhas['tipo'];
        $tamanho = $linhas['tamanho'];
        $marca = $linhas['marca'];

        echo "<tr>
                <td>$data_validade</td>
                <td>$qt_litro</td>
                <td>$qt_latas</td>
                <td>$cor</td>
                <td>$tipo</td>
                <td>$tamanho</td>
                <td>$marca</td>
            </tr>";
      }

    ?>
   </tbody>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>