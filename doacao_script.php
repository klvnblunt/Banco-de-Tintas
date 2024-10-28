<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success border-bottom shadow-sm mb-3">
        <div class="container">
            <a class="navbar-brand" href=""><strong>Banco de Tintas</strong></a>
        </div>
  </nav>
  <div class="container">
    <div class="row">
      <?php
      include_once "conexao.php";
      if (!$conexao) {
          die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
      }

      if (isset($_POST['submit'])) {
        echo "Formulario enviado";
        
          $data_validade = $_POST['data_validade'];
          $litro = $_POST['litro'];
          $qt_lata = $_POST['qt_lata'];
          $cor = $_POST['cor'];
          $tipo_tinta = $_POST['tipo_tinta'];
          $tm_embalagem = $_POST['tm_embalagem'];
          $marca = $_POST['marca'];

          $result = mysqli_query($conexao, "INSERT INTO `doacao`
                      (`data_validade`, `qt_litro`, `qt_lata`, `cor`, `tipo`, `tamanho`, `marca`) 
                      VALUES ('$data_validade', '$litro', '$qt_lata', '$cor', '$tipo_tinta', '$tm_embalagem', '$marca')");

          if ($result) {
              echo mensagem("Doação feita com sucesso", 'success');
          } else {
              echo "Erro ao executar a consulta: " . mysqli_error($conexao);
          }
      }
      ?>
      <a href="doador.php" class="btn btn-primary">Fazer uma nova doação</a>
      <a href="tela_inicial.php" class="btn btn-primary">Voltar para a tela inicial</a>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>
