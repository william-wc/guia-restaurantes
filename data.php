<?php
	date_default_timezone_set("Brazil/East");
	$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", 
					"Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro" );
	$dia = date ("d", time());
	$mes = date ("m", time());
	$ano = date ("Y", time());
	echo "<p>" . $dia. " de " . $meses[$mes-1] . " de ". $ano ."</p>";
?>