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
            // Verificando todos os dados recebidos
            //var_dump($_POST);  // Isso ajuda a verificar se o id_doação está presente
        
            $id_doação = isset($_POST['id_doação']) ? $_POST['id_doação'] : null;
        
            if (empty($id_doação)) {
                echo "Erro: id_doação está vazio ou não foi enviado.";
                exit;
            }

            $id_doação = isset($_POST['id_doação']) ? $_POST['id_doação'] : null;
            $data_validade = isset($_POST['data_validade']) ? $_POST['data_validade'] : null;
            $litro = isset($_POST['litro']) ? $_POST['litro'] : null;
            $qt_latas = isset($_POST['qt_lata']) ? $_POST['qt_lata'] : null;
            $cor = isset($_POST['cor']) ? $_POST['cor'] : null;
            $tipo_tinta = isset($_POST['tipo_tinta']) ? $_POST['tipo_tinta'] : null;
            $tm_embalagem = isset($_POST['tm_embalagem']) ? $_POST['tm_embalagem'] : null;
            $marca = isset($_POST['marca']) ? $_POST['marca'] : null;
            $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
            $contato = isset($_POST['contato']) ? $_POST['contato'] : null;
            
            
            // Consulta SQL com placeholders '?'
            $query = "UPDATE `aprovados_doacao` 
                    SET `data_validade` = ?, `qt_litro` = ?, `qt_latas` = ?, `cor` = ?, `tipo` = ?, 
                        `tamanho` = ?, `marca` = ?, `nome` = ?, `contato` = ? 
                    WHERE `id_doação` = ?";

            // Prepara a consulta
            $stmt = mysqli_prepare($conexao, $query);

            // Verifique se a preparação foi bem-sucedida
            if ($stmt === false) {
                echo "Erro ao preparar a consulta: " . mysqli_error($conexao);
                exit;
            }

            // Vincula os parâmetros para os placeholders
            mysqli_stmt_bind_param($stmt, 'sssssssssi', $data_validade, $litro, $qt_latas, $cor, $tipo_tinta, $tm_embalagem, $marca, $nome, $contato, $id_doação);

            // Executa a consulta
            if (mysqli_stmt_execute($stmt)) {
                echo mensagem("Alterado com sucesso!", 'success');
            } else {
                echo "Erro ao alterar: " . mysqli_stmt_error($stmt);
            }

            // Fecha a consulta
            mysqli_stmt_close($stmt);
        }
?>


      <a href="estoque.php" class="btn btn-primary">Voltar para o estoque</a>
      <a href="tela_inicial_adm.php" class="btn btn-primary">Voltar para a tela inicial</a>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>