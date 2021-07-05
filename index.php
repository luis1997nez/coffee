<!DOCTYPE html>
<html>
<head>

	<title>Coffee&Food</title>
	<link rel="stylesheet" type="text/css" href="estilos/index.css">

</head>
<body>

	<header>

		<div class = "uno">

			<p class = "tel">Teléfono: 9982922137</p>
			<p class = "contacto">Contacto: cafe@utcancun.edu.mx</p>
			<a href = ""><img class = "rSociales" src="images/nav/facebook.png"></a>
			<a href = ""><img class = "rSociales" src="images/nav/instagram.png"></a>
			<a href = "nosotros.php" class = "conocer">Conócenos</a>

		</div>

	</header>

	<nav>

		<div class = "dos">
			<img class = "logo" src="images/nav/logo.png">
			<ul class = "menu">
	       	  <li><a href = "index.php">INICIO</a></li>
	       	  <li><a href = "menu.php">MENÚ</a></li>
	       	  <li><a href = "servicios.php">SERVICIOS</a></li>
	       	  <li><a href = "nosotros.php">NOSOTROS</a></li>
		      <li><a href = "contacto.php" class = "sinborder">CONTACTO</a></li>
		    </ul>
		</div>

	</nav>

	<section>
		
		<div class = "tres">

			<h1 class = "titulo">Bienvenido</h1>

			<h5 class = "sub1">El asombroso sabor &amp; un hermoso lugar</h5>
            <p class="text1">El mejor café de nuestro méxico dedicado para nuestro clientes.</p>
            <a href = "menu.php"><div class = "boton1">Ver menú</div></a>

		</div>
		
	</section>

	<section>
		<div class="separador"></div>
	</section>

	<section>
		
		<div class = "cuatro" id = "event">
			
			<a href = "servicios.php"><img class = "imgServicios" src="images/section/servicios.jpg"></a>

			<div class = "cuadro">
				<h1 class = "titulo2">Servicios</h1>
				<h5 class = "sub2">Observe nuestros servicios</h5>
            	<p class="text2">Le presentamos las herramientas con la que cuenta nuestro restaurante, pensado en nuestros clientes por que sabemos que su tiempo es importante.</p>
			</div>

		</div>

		<div class = "cinco">
			
		</div>

	</section>

	<section>
		<div class="separador"></div>
	</section>

	<section>
		
		<div class = "seis" id = "event">

			<div class = "siete">
				
				<h1 class = "titulo3">Conócenos</h1>
				<h5 class = "sub3">Observe nuestra historia</h5>
            	<p class="text3">Te presentamos una información sobre quienes como nostros y como llegó nuestro restaurante en perfecto nivél</p>
            	

			</div>

			<a href = "nosotros.php"><div class = "boton2">Conócenos</div></a>

		</div>

	</section>

	<section>
		<div class="separador"></div>
	</section>

	<section>
		
		<div class = "ocho" id = "event">

			<div class = "cuadro2">
				<h1 class = "titulo3">Contacto</h1>
				<h5 class = "sub3">Puedes comunicarte con nosotros</h5>
            	<p class="text3">¿Tienes alguna duda o sugerencia? Puedes comunicarte directamente en nuestro sitios web, envianos tus comentarios, nos gustaria escucharte.</p>
			</div>

		</div>

	</section>

	<section>
		<div class="separador"></div>
	</section>

	<section>
		
		<div class = "nueve" id = "event">

			<div class = "diez">
				
				<h1 class = "titulo4">Descubre</h1>
				<h5 class = "sub4">Las mejores bebidas vendidas</h5>
            	<p class="text4">Te presentamos las bebidas más pedidas por nuestros clientes.</p>
            	
			</div>

			<div class = "once">
				<div class = "cuadro3">
					<a href="menu.php"><img class = "descubre"src="images/menu/capuccino.jpg"></a>
					<p class = " nombre1">CAFÉ CAPPUCCINO</p>
				</div>
				<div class = "cuadro3">
					<a href="menu.php"><img class = "descubre"src="images/menu/frappuccino.jpg"></a>
					<p class = " nombre1">FRAPPUCCINO</p>
				</div>
				<div class = "cuadro3">
					<a href="menu.php"><img class = "descubre"src="images/menu/americano.jpg"></a>
					<p class = " nombre1">CAFÉ AMERICANO</p>
				</div>
				<div class = "cuadro3">
					<a href = "menu.php"><img class = "descubre"src="images/menu/moca.jpg"></a>
					<p class = " nombre1">CAFÉ MOCA</p>
				</div>
			</div>
			


		</div>

	</section>


	<footer>
		
		<div class = "pie">

					<p class = "textooo"><b>Dirección: </b><span>Paseos Nikté Supermanzana 255, Manzana 48, Lote 8 Avenida Galaxias del Sol.</span></p>
					<p class = "textooo"><b>Teléfono: </b><span>(998) 292 21 37</span></p>
					<p class = "textooo"><b>Email: </b><span>cafe@utcancun.edu.mx</span></p>

		</div>

	</footer>


	<script>
			
			let animado = document.querySelectorAll("#event");
			
			function mostrarScroll(){
				let scrollTop = document.documentElement.scrollTop;
				
				for (var i = 0; i < animado.length; i++) {
					
					let alturaAnimado = animado[i].offsetTop;

					if(alturaAnimado - 500 < scrollTop) {
						animado[i].style.opacity = 1;
					}
				}

			}

			window.addEventListener('scroll', mostrarScroll);

			//---------------

	</script>

</body>
</html>