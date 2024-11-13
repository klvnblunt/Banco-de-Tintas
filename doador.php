<?php
  include('protecao.php');
?>
<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banco de Tintas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        
    
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success border-botton shadow-sm mb-3">
        <div class="container">
            <a class="navbar-brand" href=""><img src="banco_tintas.jpg" width="50" height="50" class="d-inline-block align-top"><strong>Banco de Tintas</strong></a>
            <div class ="align-self-end">
              <div class = "align-self-end">
        </div>
    </nav>
    <div class="container">
        <form action="doacao_script.php" method="POST">
            <h1>Formulario para doação:</h1><br>
            <div class="alert alert-warning" role="alert">
                Serão somente aceitos sobras de tintas dentro da DATA DE VALIDADE e a BASE DE ÁGUA, devem estar em boas condições, hermerticamente VEDADAS e na sua EMBALAGEM ORIGINAL<br>
                Caso não atenda esses criterios a doação NÃO SERÁ ACEITA 
            </div>

            <div class="mb-3">
                <label for="data_validade" class="form-label">Data de validade da tinta:</label>
                <input type="date" name="data_validade" class="form-control" id="data_validade" required>
            </div><br>
            <p>Qual a quantidade de sobra de tinta que está sendo doada</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="litro" value="1litro" required>
                <label class="form-check-label" for="1litro">
                Menos de 1 litro
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="litro" value="1_a_2litros" required>
                <label class="form-check-label" for="1A2litros">
                Aproximadamente 1 a 2 litros
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="litro" value="2_a_5litros" required>
                <label class="form-check-label" for="2a5litros">
                Aproximadamente 2 a 5 litros
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="litro" value="5_a_10litros" required>
                <label class="form-check-label" for="5a10litros">
                Aproximadamente 5 a 10 litros
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="litro" value="10_litros" required>
                <label class="form-check-label" for="10litros">
                Mais de 10 litros
                </label>
            </div><br>
            <div class="mb-3">
                <label for="qt_lata" class="form-label">Quantas latas ou galões serão doadas:</label>
                <input type="text" name="qt_lata" class="form-control" id="qt_lata"  required>
            </div><br>
            <div class="mb-3">
                <label for="cor" class="form-label">Informe a cor da tinta (cores fantasias especificado na embalagem):</label>
                <input type="text" name="cor" class="form-control" id="cor" placeholder="" required>
            </div><br>
            <p>Informe a indicação de aplicação da tinta</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_tinta" value="alvinaria" required>
                <label class="form-check-label" for="alvinaria">
                Alvinaria
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_tinta" value="madeira" required>
                <label class="form-check-label" for="madeira">
                Madeira
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_tinta" value="metal" required>
                <label class="form-check-label" for="metal">
                Metal
                </label>
            </div><br>
            <p>Informe o tamanho da embalagem</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tm_embalagem" value="900ml" required>
                <label class="form-check-label" for="900ml">
                900ml
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tm_embalagem" value="3,6litros" required>
                <label class="form-check-label" for="6litros">
                3,6 litos
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tm_embalagem" value="18litros" required>
                <label class="form-check-label" for="18litros">
                18 litros
                </label>
            </div><br>
            <div class="mb-3">
                <label for="marca" class="form-label">Informe a marca da tinta:</label>
                <input type="text" name="marca" class="form-control" id="marca" placeholder="" required>
            </div><br>
            <div class="mb-3">
                <label for="contato" class="form-label">Nome do doador</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="" required>
            </div><br>
            <div class="mb-3">
                <label for="contato" class="form-label">Número de telefone para contato</label>
                <input type="text" name="contato" class="form-control" id="contato" placeholder="" required>
            </div><br>
            <div class="mb-3">
                <input type="submit" name="submit" class="btn btn-success">
                <a href="tela_inicial.php" class="btn btn-primary"> Voltar</a>
            </div>
            
        </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>