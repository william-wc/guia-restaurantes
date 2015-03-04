<?php 
	function soma($x, $y) {
		return $x + $y;
	}
	
	function subtracao($x, $y) {
		return $x - $y;
	}
	
	function multiplicacao($x, $y, &$resultado) {
		$resultado = $x * $y;
	}
	
	function divisao($x, $y, &$resultado) {
		$resultado = $x / $y;
	}
?>