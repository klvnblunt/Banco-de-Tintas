<?php
include('protecao.php');
include_once "conexao.php";

if (isset($_GET['id_doação'])) {
    $id_doação = $_GET['id_doação'];

    // Consulta para obter a linha da tabela 'doacao'
    $sql = "SELECT * FROM doacao WHERE id_doação = $id_doação";
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

        // Inserir na tabela 'aprovados_doacao'
        $insert_sql = "INSERT INTO aprovados_doacao (data_validade, qt_litro, qt_latas, cor, tipo, tamanho, marca) 
                       VALUES ('$data_validade', '$qt_litro', '$qt_latas', '$cor', '$tipo', '$tamanho', '$marca')";

        if (mysqli_query($conexao, $insert_sql)){
            $delete_sql = "DELETE FROM doacao WHERE id_doação =$id_doação";
            if (mysqli_query($conexao, $delete_sql)) {
            echo "Doação aprovada com sucesso!";
            } else {
            echo "Erro ao aprovar a doação: " . mysqli_error($conexao);
            }
            } else {
                echo "Registro não encontrado.";
            }
        }
    } else {
    echo "ID não fornecido.";
}

mysqli_close($conexao);
?>