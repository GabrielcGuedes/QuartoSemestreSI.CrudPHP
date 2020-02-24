<?php
include "conexao.php";

$id_pessoas= $_GET["id_pessoas"];

$consulta_por_id = "DELETE FROM pessoa where idPessoa=$id_pessoas";

$resultado = mysqli_query($conexao, $consulta_por_id);

$linhas= mysqli_affected_rows($conexao);

if($linhas == 1){
    header("Location: agenda.php");
}
else{
    echo "Opreção não realizada";
}

mysqli_close($conexao);