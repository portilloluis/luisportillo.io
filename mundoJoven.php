		<? include "head.php" ?>
		<title>Luis Portillo: Mundo Joven</title>
		<meta name="description" content="Portafolio Digital de trabajos de diseño gráfico y web de Luis Portillo" />
		<link rel="stylesheet" href="css/vendor/jquery.fancybox.css">
	</head>
	<body>
		<? include "nav.php" ?>
		<h2 id="tituloProyecto">Mundo Joven</h2>
		<div class="center">
			<article class="introCuadro item" id="descripcion">
				<h3>Descripción</h3>
				<p>Diseño de interfaz para diversos sistemas y rediseño y armado de diversas secciones del sitio principal.<p>
				<p id="textoPequeno">(A través de <a href="http://mother.travel/" target="_blank">Mother Travel</a>)</p>
			</article>
			<a href="http://www.mundojoven.com" class="verMas" target="_blank">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/mj/mj_1.jpg" alt="Casa Morales Imagotipo">
				</article>
			</a>
			<a rel="porta" href="img/portafolio/mj/grandes/mj_2.jpg" class="verMas">
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/mj/mj_2.jpg" alt="Casa Morales tarjetas">
				</article>
			</a>
			<a rel="porta" href="img/portafolio/mj/grandes/mj_3.jpg" class="verMas">
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/mj/mj_3.jpg" alt="Casa Morales hoja membretada">		
				</article>
			</a>
			<a rel="porta" href="img/portafolio/mj/grandes/mj_4.jpg" class="verMas">
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/mj/mj_4.jpg" alt="Casa Morales Firma electrónica">	
				</article>
			</a>
			<a rel="porta" href="img/portafolio/mj/grandes/mj_5.jpg" class="verMas">
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/mj/mj_5.jpg" alt="Casa Morales uniforme hombre">
				</article>
			</a>
			<a rel="porta" href="img/portafolio/mj/grandes/mj_6.jpg" class="verMas">
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/mj/mj_6.jpg" alt="Casa Morales uniforme mujer">
				</article>
			</a>
		</div>
		<? include "footer.php" ?>
		<script src="js/vendor/jquery.fancybox.js"></script>
		<script>
			$(document).ready(function() {
				$(".verMas").fancybox();
			});
		</script>
	</body>
</html>