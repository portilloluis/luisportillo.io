		<? include "head.php" ?>
		<title>Luis Portillo: Mother travel</title>
		<meta name="description" content="Portafolio Digital de trabajos de diseño gráfico y web de Luis Portillo" />
		<link rel="stylesheet" href="css/vendor/jquery.fancybox.css">
	</head>
	<body>
		<? include "nav.php" ?>
		<h2 id="tituloProyecto">Mother travel</h2>
		<div class="center">
			<article class="introCuadro item" id="descripcion">
				<h3>Descripción</h3>
				<p>Diseño de interfaz para diversos sistemas, rediseño del sitio principal y material corporativo interno.<p>
            </article>
            <a rel="porta" href="img/portafolio/mother/grandes/mother_1.jpg" class="verMas">
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/mother/mother_1.jpg" alt="Casa Morales tarjetas">
				</article>
			</a>
			<a rel="porta" href="img/portafolio/mother/grandes/mother_2.jpg" class="verMas">
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/mother/mother_2.jpg" alt="Casa Morales tarjetas">
				</article>
			</a>
			<a rel="porta" href="img/portafolio/mother/grandes/mother_3.jpg" class="verMas">
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/mother/mother_3.jpg" alt="Casa Morales hoja membretada">		
				</article>
			</a>
			<a rel="porta" href="img/portafolio/mother/grandes/mother_4.jpg" class="verMas">
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/mother/mother_4.jpg" alt="Casa Morales Firma electrónica">	
				</article>
			</a>
			<a rel="porta" href="img/portafolio/mother/grandes/mother_5.jpg" class="verMas">
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/mother/mother_5.jpg" alt="Casa Morales uniforme hombre">
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