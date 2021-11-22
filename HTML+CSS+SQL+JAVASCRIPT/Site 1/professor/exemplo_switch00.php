<?php
	// http://localhost/php/exemplo_switch00.php?controle=1&numero1=10&numero2=5

	$controle = $_REQUEST['controle']; // poderia vir de uma interface por $_POST[]
	$numero1  = $_REQUEST['numero1']; // poderia vir de uma interface por $_POST[]
	$numero2  = $_REQUEST['numero2']; // poderia vir de uma interface por $_POST[]

	$controle = substr($controle, 0,1); // retira o primeiro caractere


	switch($controle){
		case 1:
			$resultado = $numero1 + $numero2;
			echo "O resultado é: ".$resultado;
		break;

		case 2:
			$resultado = $numero1 - $numero2;
			echo "O resultado é: ".$resultado;
		break;

		default:
			echo "Opção inválida!";
		break;
	}
?>