<?php 
include("./conexao.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(isset($_POST['pontuacao'])) {

        $pontuacao = $_POST['pontuacao'];

        if ($pontuacao == 6) {
            $estrelas = 3;
        } else if ($pontuacao >= 3) {
            $estrelas = 2;
        } else if ($pontuacao >= 1) {
            $estrelas = 1;
        } else {
            $estrelas = 0;
        }

        $sql = "INSERT INTO historico(qtd_estrelas, data_hora) VALUES ($estrelas, NOW())";

        if ($conn->query($sql) === TRUE) {
            echo "estrelas salvas com sucesso!!";
        } else {
            echo "erro ao salvar estrelas: " . $conn->error;
        }
        $conn->close();
    } else {
        echo "erro! pontuacao não foi enviada.";
    }
} else {
    echo "erro! método de requisição inválido.";
}

?>