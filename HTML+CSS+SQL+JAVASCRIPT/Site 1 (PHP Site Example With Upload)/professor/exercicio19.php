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
    		<form name="form1" method="post" action="processa_exercicio19.php">
           <legend>
                <span class="numero">1</span>
                Exercício 19
            </legend>
              <span class="enunciado">


Solicite ao usuário que escreva uma frase e o número de vezes que a mesma deve ser mostrada. 
Implemente o algoritmo usando for.
<br>



              <hr>  
              <br>
              <br>
              </span>
          Número: <input type="text" name="nvezes" /> 
                <br>
          Frase: <input type="text" name="frase" />  
               
                <br> 

              	<br>   
          		<input name="botao" type="submit" value="Enviar" />
         	</form>
        </div>
    </body>
</html>
