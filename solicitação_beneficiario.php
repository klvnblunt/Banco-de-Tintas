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
                include('protecao.php');
                include_once "conexao.php";

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    //var_dump($_GET['id_doação']);
                    $id_doação = $_GET['id_doação']; 
                    $nome = $_POST['nome'];
                    $telefone = $_POST['telefone'];

                    // Consulta para obter a linha da tabela 'doacao'
                    $sql = "SELECT * FROM aprovados_doacao WHERE id_doação = $id_doação";
                    $result = mysqli_query($conexao, $sql);

                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);

                        // Preparar os dados para a inserção
                        $data_validade = $row['data_validade'];
                        $qt_litro = $row['qt_litro'];
                        $qt_latas = $row['qt_latas'];
                        $cor = $row['cor'];
                        $tipo = $row['tipo'];
                        $tamanho = $row['tamanho'];
                        $marca = $row['marca'];
                        $nome = trim($_POST['nome']);
                        $telefone = trim($_POST['telefone']);

                        // Inserir na tabela 'aprovados_doacao'
                        $insert_sql = "INSERT INTO aprovados_beneficiario (data_validade, qt_litro, qt_latas, cor, tipo, tamanho, marca, nome, contato) 
                                    VALUES ('$data_validade', '$qt_litro', '$qt_latas', '$cor', '$tipo', '$tamanho', '$marca', '$nome', '$telefone')";

                        if (mysqli_query($conexao, $insert_sql)){
                            $delete_sql = "DELETE FROM aprovados_doacao WHERE id_doação =$id_doação";
                            if (mysqli_query($conexao, $delete_sql)) {
                            echo mensagem("Sua solicitação foi enviado para análise. Entraremos em contato informando caso seja aprovada.", 'success');
                            } else {
                            echo "Erro ao aprovar a doação: " . mysqli_error($conexao);
                            }
                            } else {
                                echo "Registro não encontrado.";
                            }
                        }
                    } else {
                    echo mensagem ("ID não fornecido.", 'success');
                }

                mysqli_close($conexao);
                ?>
                <a href="beneficiario.php" class="btn btn-primary">Voltar para o paínel de beneficiario</a>
                <a href="tela_inicial.php" class="btn btn-primary">Voltar para a tela inicial</a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html