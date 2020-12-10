<?php

	$query = mysqli_query($conexao, $SQL);
	
	if($query)
    {
		echo '<a "href= "index.php">  Voltar </a>';
	} 
    else 
    {
		echo mysqli_error($conexao);
	}

	mysqli_close($conexao);

?>