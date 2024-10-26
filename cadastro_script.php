<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>

  </style>
</head>

<body>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success border-botton shadow-sm mb-3">
        <div class="container">
            <a class="navbar-brand" href=""><strong>Banco de Tintas</strong></a>
        </div>
  </nav>
  <div class="container">
    <div class="row">
      <?php
      include_once "conexao.php";

      // Limpar os dados de entrada para evitar espaços em branco
      $nome = trim($_POST['nome']);
      $endereco = trim($_POST['endereco']);
      $telefone = trim($_POST['telefone']);
      $email = trim($_POST['email']);
      $dtnacimento = trim($_POST['dtnacimento']);
      $senha = trim($_POST['senha']);

      // Criptografar a senha com password_hash
      $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

      $sql = "INSERT INTO `usuario`
                  (`nome`, `endereco`, `telefone`, `email`, `data_nacimento`, `senha`) 
                  VALUES ('$nome','$endereco','$telefone','$email','$dtnacimento', '$senhaHash')";

      if (mysqli_query($conexao, $sql)) {
        mensagem("$nome cadastrado com sucesso!", 'success');
      } else {
        echo mensagem("$nome NÃO cadastrado!", 'danger');
      }
      ?>

      <a href="index.php" class="btn btn-primary"> Voltar</a>
      <a href="tela_inicial.php" class="btn btn-primary"> Ir para a tela inicial</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>