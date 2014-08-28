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
			<figure>
				<img src="Imagem/restaurante-terraco-italia.jpg" alt="Restaurante Terraço Itália" />
			</figure>
			<h4> Aqui o crítico gastrônomico é você.</h4>
			<p> Dicas dos melhores restaurantes de São Paulo. </p>
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