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
    <div class="">
      <?php
      include_once "conexao.php";
      if (!$conexao) {
          die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
      }

      if (isset($_POST['submit'])) {
        
          $data_validade = isset($_POST['data_validade']) ? $_POST['data_validade'] : null;
          $litro = isset( $_POST['litro']) ? $_POST['litro'] : null;
          $qt_latas = isset($_POST['qt_lata']) ? $_POST['qt_lata'] : null;
          $cor = isset($_POST['cor']) ? $_POST['cor'] : null;
          $tipo_tinta = isset($_POST['tipo_tinta']) ? $_POST['tipo_tinta'] : null;
          $tm_embalagem = isset($_POST['tm_embalagem']) ? $_POST['tm_embalagem'] : null;
          $marca = isset($_POST['marca']) ? $_POST['marca'] : null;
          $contato = isset($_POST['contato']) ? $_POST['contato'] : null;

          $result = mysqli_query($conexao, "INSERT INTO `doacao`
                      (`data_validade`, `qt_litro`, `qt_latas`, `cor`, `tipo`, `tamanho`, `marca`, `contato`) 
                      VALUES ('$data_validade', '$litro', '$qt_latas', '$cor', '$tipo_tinta', '$tm_embalagem', '$marca', '$contato')");

          if ($result) {
              echo mensagem("Sua doação foi enviado para análise. Entraremos em contato informando os pontos de coletas e horarios caso a doação seja aprovada.", 'success');
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
