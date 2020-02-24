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
        <title>Cadastrar Pessoa</title>
        
    </head>
    <body>
        
        <form action="cadastro.php" method="post">
            
            <div class="form-group" id="CaixaDeTexto">
             <h1>Cadastrar Pessoa</h1>
            <label>Nome:</label><input name="nometxt" type="text" class="form-control"/><br>
             <label>Telefone:</label><input name="teltxt" type="text" class="form-control"/><br>
              <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
             </div>   
        </form>
    </body>
</html>
