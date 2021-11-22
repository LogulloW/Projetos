<?php

	// http://localhost/php/exemplo_switch01.php?controle=s

	$controle = $_REQUEST['controle']; // poderia vir de uma interface por $_POST[]

	$controle = substr($controle, 0,1); // retira a primeira letra

	$controle = strtolower($controle); // converte para minúsculo

	switch($controle){
		case "s":
			echo "SIM, você concorda!";
		break;

		case "n":
			echo "NÃO, você não concorda!";
		break;

		default:
			echo "Opção inválida!";
		break;
	}
?>