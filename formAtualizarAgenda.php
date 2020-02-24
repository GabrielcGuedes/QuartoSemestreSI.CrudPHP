<?php
include "conexao.php";

$id_pessoas= $_GET["id_pessoas"];

$consulta_por_id = "SELECT * FROM pessoa where idPessoa=$id_pessoas";

$resultado = mysqli_query($conexao, $consulta_por_id);

$pessoas= mysqli_fetch_assoc($resultado);

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/meu-estilo.css" rel="stylesheet" type="text/css"/>
        <title>Atualizar Pessoa</title>

    </head>
    <body>
        <form action="atualizarAgenda.php" method="post"> 
            <input type="hidden" name="id_pessoas" value="<?php print($pessoas['idPessoa']) ?>" >
            <div class="form-group" id="CaixaDeTexto">
                <h1>Atualizar Pessoa</h1>
                <label>Nome:</label><input name="nometxt" type="text" class="form-control" value="<?php print($pessoas['nome']) ?>"  ><br>
                <label>Telefone:</label><input name="teltxt" type="text" class="form-control" value="<?php print($pessoas['celular']) ?>" ><br>
                <button type="submit" class="btn btn-outline-primary">Atualizar</button>
            </div>   
        </form>
    </body>
</html>
