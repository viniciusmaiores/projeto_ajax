<?php
	$conexao = mysqli_connect("localhost", "vinicius", "30032003");

	if(!$conexao) 
    {
		echo mysqli_connect_error ($conexao);
	}

	$db = mysqli_select_db($conexao, "dados");
	if(!$db) 
    {
		echo mysqli_error ($conexao);
    }
?>