<?php
  include "inc/cabecalho_conexao.inc";
    $nome= $_POST["nome"];
    $telefone = $_POST["telefone"];
    $estados = $_POST["estados"];
    $cidades = $_POST["cidades"];

 
    include "inc/cabecalho_conexao.inc";
    $SQL = "INSERT INTO pessoa (nome, telefone, estados, cidades) 
    
    VALUE ('$nome', '$telefone', '$estados', '$cidades')";

    echo '<h2> Cadastro realizado com sucesso!</h2>';
    include "inc/rodape_conexao.inc";
?>