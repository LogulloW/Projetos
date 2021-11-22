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
    		<form name="form1" method="post" action="processa_exercicio13.php">
           <legend>
                <span class="numero">1</span>
                Exercício 13
            </legend>
              <span class="enunciado">
                A prefeitura de Florianópolis abriu uma linha de crédito para os funcionários estatutários. O valor máximo da prestação não poderá ultrapassar 30% do salário bruto. Faça um algoritmo que permita entrar com o salário bruto e o valor da prestação e informar se o empréstimo pode ou não ser concedido.
 
              <hr>  
              <br>
              <br>
              </span>
    
  
          Salário Bruto: <input type="text" name="sb" /> 
                <br>
          Valor da Prestação: <input type="text" name="vp" /> 
                <br>
              	<br>   
          		<input name="botao" type="submit" value="Enviar" />
         	</form>
        </div>
    </body>
</html>
