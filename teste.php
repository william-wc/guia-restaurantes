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
                        
			echo soma($a, $b)."<br>";
			echo subtracao($a, $b)."<br>";
			multiplicacao($a, $b, $r); 
                        echo $r."<br>";
			divisao($a, $b, $r); 
                        echo $r."<br>";
		?>	
	</body>
</html>