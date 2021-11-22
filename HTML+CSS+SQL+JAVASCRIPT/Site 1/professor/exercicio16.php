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
    		<form name="form1" method="post" action="processa_exercicio16.php">
           <legend>
                <span class="numero">1</span>
                Exercício 16
            </legend>
              <span class="enunciado">
                Implemente uma calculadora,
                primeiro peça 2 números ao usuário (um de cada vez)
                e apresente as seguintes opções:

                1 - adição,
                2 - subtração,
                3 - multiplicação,
                4 - divisão.

                Mostre o resultado após a operação.

              <hr>  
              <br>
              <br>
              </span>
          Operação: <select name="operacao">
                        <option value="0">Selecione uma Operação</option>
                        <option value="1">1 - Adição</option>
                        <option value="2">2 - Subtração</option>
                        <option value="3">3 - Multiplicação</option>
                        <option value="4">4 - Divisão</option>
                    </select>
                <br> 
          Número 1: <input type="text" name="numero1" /> 
                <br>
          Número 2: <input type="text" name="numero2" />  -
                <br>
              	<br>   
          		<input name="botao" type="submit" value="Enviar" />
         	</form>
        </div>
    </body>
</html>
