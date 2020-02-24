<?php
include "conexao.php";

$sql = "select*from pessoa";

$resultado= mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/meu-estilo.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <h1>Agenda Pessoal</h1>
        <div class="table-responsive-sm">
        <table border="1" class="table table-dark table-hover">           
            <TR>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Atualizar</td>
                <td>Excluir</td>
            </TR> 
            
           <?php
           while($pessoas = mysqli_fetch_assoc($resultado)){
               echo "<TR>";
               
               echo "<td>".$pessoas ['nome']."</td>";
               echo "<td>".$pessoas ['celular']."</td>";
               echo "<td><a href= 'formAtualizarAgenda.php?id_pessoas=$pessoas[idPessoa]'>atualizar</a></td>";
               echo "<td><a href='excluirPessoa.php?id_pessoas=$pessoas[idPessoa]'>excluir</a></td>";
           }
           
           mysqli_close($conexao)
           ?>
            
        </table>
           </div>
        <p>Cadastrar<a href="index.php"> Novo(a)</a>pessoa</p>
    </body>
</html>
