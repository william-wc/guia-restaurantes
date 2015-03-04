<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="UTF-8">
		<style>
			table, th, td {
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<?php 
			include "operacoes.php";
			
			$a = 5;
			$b = 10;
			$r = -1;
			//echo soma($a, $b);
			multiplicacao($a, $b, $r);
			echo $r;
		?>	
	</body>
</html>