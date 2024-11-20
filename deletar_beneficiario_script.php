
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    
    </style>
</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success border-botton shadow-sm mb-3">
        <div class="container">
            <a class="navbar-brand" href=""><img src="banco_tintas.jpg" width="50" height="50" class="d-inline-block align-top"><strong>Banco de Tintas </strong></a>
        </div>
    </nav>
    <div class ="container">
        <div class = "">
            <?php
                include('conexao.php'); 

                if (isset($_GET['id_doação'])) {
                    $id_doação = $_GET['id_doação'];
                    
                    $sql = "DELETE FROM aprovados_beneficiario WHERE id_doação = '$id_doação'";
                    
                    if (mysqli_query($conexao, $sql)) {
                        echo mensagem( "Registro excluído com sucesso.", 'success');
                        
                    } else {
                        echo "Erro ao excluir registro: " . mysqli_error($conexao);
                    }
                } else {
                    echo "ID de doação não fornecido.";
                }
                ?>

                <a href="painel_doador.php" class="btn btn-primary">Voltar para o paínel de doação</a>
                <a href="tela_inicial_adm.php" class="btn btn-primary">Voltar para a tela inicial</a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html