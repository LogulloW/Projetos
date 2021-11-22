<?php

include_once("index.php");

?>
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="folha_estilo.css">
    	<title>Título da Página</title>
    </head>
    <body>
      <div class="classe01">
    		<form name="form1" method="post" action="processa_exercicio15.php">
           <legend>
                <span class="numero">1</span>
                Exercício 15
            </legend>
              <span class="enunciado">
                Solicitar nome e idade de uma pessoa.
                Se a pessoa possuir idade entre 15 e 25 anos, imprimir o nome e a mensagem: “ACEITA”.
                Caso contrário, imprimir o nome e a mensagem: “NÃO ACEITA”.


 
              <hr>  
              <br>
              <br>
              </span>
    
  
          Nome: <input type="text" name="nome" /> 
                <br>
          Idade:<input type="text" name="idade" /> 
                <br>
              	<br>   
          		<input name="botao" type="submit" value="Enviar" />
         	</form>
        </div>
    </body>
</html>
