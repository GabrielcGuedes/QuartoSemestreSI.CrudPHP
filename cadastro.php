<?php

include "conexao.php";

$nome=$_POST["nometxt"];
$celular=$_POST["teltxt"];


$sql = "insert into pessoa (nome,celular) values('$nome',$celular)";

if(mysqli_query($conexao,$sql))
        {
    echo 'Pessoa cadastrada com sucesso';
    header("Location:agenda.php");
        } else {
            echo "Error:". $sql."<br>".mysqli_error($conn);
}
mysqli_close($conexao);