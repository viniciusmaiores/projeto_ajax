<?php
    $conexao = mysqli_connect("localhost", "vinicius", "30032003", "teste");

    if(!$conexao){
        echo "Falha na conexao com o banco de dados<br>";
    }
?>