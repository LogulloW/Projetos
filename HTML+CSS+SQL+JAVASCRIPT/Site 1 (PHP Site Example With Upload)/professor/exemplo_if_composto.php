<?php

	// http://localhost/php/exemplo_if_composto.php?numero=12

	$numero = $_REQUEST['numero']; // poderia vir de uma interface por $_POST[]

	if($numero > 10){
		$metade = $numero /2;
		echo "A metade é: ".$metade;
	}else{
		$dobro = $numero * 2;
		echo "O dobro é: ".$dobro;
	}

?>

