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
    		<form name="form1" method="post" action="processa_exercicio17.php">
           <legend>
                <span class="numero">1</span>
                Exercício 17
            </legend>
              <span class="enunciado">
Implemente um algoritmo em JAVA que escreva a seguinte mensagem na tela, substituindo a profissão pela informada pelo usuário:<br>

"Tibúrcio é <profissão>"<br>

Solicite ao usuário que informe a profissão do Tibúrcio, apresente as seguintes opções:

e - engenheiro,
p - programador,
m - médico,
a - advogado,
d - designer.

Se informada opção diferente das apresentadas a profissão é
DESEMPREGADO.


              <hr>  
              <br>
              <br>
              </span>
          Profissão: <select name="profissao">
                        <option value="0">Selecione uma Profissão</option>
                        <option value="e">e - engenheiro</option>
                        <option value="p">p - programador</option>
                        <option value="m">m - médico</option>
                        <option value="a">a - advogado</option>
                        <option value="d">d - designer</option>
                    </select>
                <br> 

              	<br>   
          		<input name="botao" type="submit" value="Enviar" />
         	</form>
        </div>
    </body>
</html>
