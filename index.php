<?php
    include("conexao.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Projeto AJAX</title>
        <script src="jquery-3.5.1.js"></script>
        <script src="arquivo_externo.js"></script>
    </heade>
    <body>
        <form action="cadastro.php" method = "POST">

            <label>Nome:</label>
            <input type="text" name="nome"/><br>

            <label>Telefone:</label>
            <input type="text" name="telefone"/><br>

            <label>Estados</label>
            <select name="estados" id="estados">
                <?php
                    $SQL = "SELECT * FROM estados";
                    $resultado = mysqli_query($conexao, $SQL);

                    while( ($tupla = mysqli_fetch_array($resultado)) != null) {
                     echo "<option value = '".$tupla[0]."'>".utf8_encode($tupla[1])."</option>";
                  }
                   mysqli_close($conexao);
                ?>
            </select><br>

            <label>Cidades</label>
            <select name ="cidades" id="cidades" >
                <div id="cidades"><select name = "cidades">
           </select>
           </div><br>

            <input type="submit" value="Salvar" />
        </form>
    </body>
</html>