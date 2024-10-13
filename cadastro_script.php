<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    </style>
  </head>
  <body>
    <div clas ="container">
        <div class = "row">
            <?php 

                include "conexao.php";

                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $dtnacimento = $_POST['dtnacimento'];

                $sql = "INSERT INTO `usuario`
                (`nome`, `endereco`, `telefone`, `email`, `data_nacimento`) VALUES ('$nome','$endereco','$telefone','$email','$dtnacimento')";

                if (mysqli_query($conexao, $sql)) {
                    mensagem ("$nome cadastrado com sucesso!", 'success');
                } else
                    echo mensagem ("$nome NÃO cadastrado!", 'dangfer');
            ?>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>