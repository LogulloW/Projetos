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
    		<form name="form1" method="post" action="processa_exercicio8.php">
            <legend>
                <span class="numero">1</span>
                Exercício 8
            </legend>
              <span class="enunciado">
                Escreva um programa em PHP que solicite ao usuário 2 números inteiros (na mesma interface), armazene os valores em variáveis e depois mostre a soma dos dois em uma mensagem.
 
              <hr>  
              <br>
              <br>
              </span>
    
    			Número 1: <input type="text" name="numero1" id="numero1" /> 
              	<br>
          Número 2: <input type="text" name="numero2" id="numero2" /> 
                <br>                
              	<br>   
          		<input name="botao" type="submit" value="Enviar" />
         	</form>
        </div>
    </body>
</html>
