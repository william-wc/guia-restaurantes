<?php include "funcoes_aux.php" ?>
<!DOCTYPE  html>
<html>
<head>
	<title> Restaurantes  SP </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body>
	<header>
		<h2> Restaurantes SP </h2>
	</header>
	<section>
		<?php include "menu.inc"; ?>
	</section>
	
	<section>
		<article>
			<h4> À Mineira </h4>
			<p> Endereço: Al. Joaquim Eugênio de Lima, 697  - São Paulo - SP </p>
			<p> Telefone: (11) 3283 2349  </p>
			<p> Nota (0 a 5): 
				<?php
					$avaliacoes = array (3,4,3,5,4,3,4);
					echo (int) mediaAvaliacoes($avaliacoes);
				?>
			</p>
			<br><br>
			
			<h4> Skye Restaurante e Bar </h4>
			<p> Endereço:  Avenida Brigadeiro Luís Antonio, 4700  - São Paulo - SP </p>
			<p> Telefone: (11) 3055-4702  </p>
			<p> Nota (0 a 5): 
				<?php
					$avaliacoes = array (5,5,3,5,5,5,4);
					echo (int) mediaAvaliacoes($avaliacoes);
				?>
			</p>
			<br><br>
		</article>
		<aside>
			<?php include "data.php"; ?>
		</aside>
	</section>
	
	<footer>
		<p> Desenvolvido por: Charles Rodamilans </p>
	</footer>
</body>
</html>