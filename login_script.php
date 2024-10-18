
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
   
    </style>
  </head>
  <body>
    <div class ="container">
        <div class = "row">
            <?php
                include_once "conexao.php";
                session_start(); 

                $erro = [];

                if ($conexao === null) {
                    die('Erro: Conexão com o banco de dados não estabelecida.');
                }

                if (isset($_POST['email']) && strlen($_POST['email']) > 0) {
                    // Usar prepared statements para evitar SQL injection
                    $stmt = $conexao->prepare("SELECT senha, id_pessoa FROM usuario WHERE email = ?");
                    
                    if (!$stmt) {
                        die('Erro na preparação da consulta: ' . $mysqli->error);
                    }
                    
                    $stmt->bind_param('s', $_POST['email']);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $dado = $result->fetch_assoc();
                    $total = $result->num_rows;

                    if ($total == 0) {
                        $erro[] = "Esse email não pertence a nenhum usuário";
                    } else {
                        
                        if (password_verify($_POST['senha'], $dado['senha'])) {
                            $_SESSION['usuario'] = $dado['id_pessoa'];
                            $_SESSION['email'] = $_POST['email']; 
                        } else {
                            $erro[] = "Senha incorreta";
                        }
                    }

                    
                    if (count($erro) == 0) {
                        echo "<script>alert('Login efetuado com sucesso'); location.href='teleinicio.php';</script>";
                    } else {
                        foreach ($erro as $mensagemErro) {
                            echo "<p>$mensagemErro</p>";
                        }
                    }
                }
            ?>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>