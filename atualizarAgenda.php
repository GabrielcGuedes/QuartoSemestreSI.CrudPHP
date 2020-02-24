<?php

include "conexao.php";

$id_pessoas = $_POST["id_pessoas"];
$nome = $_POST["nometxt"];
$celular=$_POST["teltxt"];

$sql = "update pessoa set nome='$nome',celular='$celular' where idPessoa='$id_pessoas'";

$resultado = mysqli_query($conexao, $sql); 


if($resultado == true){
    echo"cadastro realizado com sucesso"."<br/>";
    echo "<a href='agenda.php'>Voltar</a>";
}
else{
    echo "operação nao realizada"."<br/>";
    echo "<a href='agenda.php'>Voltar</a>";
}

mysqli_close($conexao);