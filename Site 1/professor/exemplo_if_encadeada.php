<?php

	// http://localhost/php/exemplo_if_encadeada.php?numero=12

	$numero = $_REQUEST['numero']; // poderia vir de uma interface por $_POST[]

	if( ($numero % 10) == 0 ){
		echo "É múltiplo de 10!";			
	}else{
		if( ($numero % 2) == 0 ){
			echo "É múltiplo de 2!";
		}else{
			if( ($numero % 5) == 0 ){
				echo "É múltiplo de 5!";
			}else{
				echo "Não é múltiplo destes!";
			}	
		}
	}

?>