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
    		<form name="form1" method="post" action="processa_exercicio9.php">
           <legend>
                <span class="numero">1</span>
                Exercício 9
            </legend>
              <span class="enunciado">
                Escreva um programa em PHP que solicite ao usuário o seu peso(aqui entenda massa) em Kg (int) e a sua altura em metros (Double). 
                Com o PHP “force” a tipagem e com estes dados calcule o IMC – Índice de Massa Corporal. Seguindo a seguinte fórmula.
                IMC = massa / (altura * altura )
                Mostre o resultado em uma mensagem na próxima página. 

 
              <hr>  
              <br>
              <br>
              </span>
    
  
    			Massa em Kg: <input type="text" name="massa" /> 
              	<br>
          Altura em metros: <input type="text" name="altura" /> 
                <br>                
              	<br>   
          		<input name="botao" type="submit" value="Enviar" />
         	</form>
        </div>
    </body>
</html>
