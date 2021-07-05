<!DOCTYPE html>
<html>
<head>

	<title>Conócenos</title>
	<link rel="stylesheet" type="text/css" href="estilos/nosotros.css">

</head>
<body>

	<header>

		<div class = "uno">

			<p class = "tel">Teléfono: 9982922137</p>
			<p class = "contacto">Contacto: cafe@utcancun.edu.mx</p>
			<a href = ""><img class = "rSociales" src="images/nav/facebook.png"></a>
			<a href = ""><img class = "rSociales" src="images/nav/instagram.png"></a>

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

			<h1 class = "titulo">CONÓCENOS</h1>

			<h5 class = "sub1">Tenemos una historia que contarte de nosotros</h5>
            <p class="text1">Te presentamos como nuestro restaurante ha crecido en estos años.</p>

		</div>

	</section>

	<section>
		<div class="separador"></div>
	</section>

	<section>
		
		<div class = "cuatro" id = "event">
			

			<div class = "cuadro" >
				<h1 class = "titulo2">Descubre</h1>
				<h5 class = "sub2">Nuestra Historia</h5>
            	<p class="text2">El Café, un restaurante inspirado en las tradicionales cafeterías del Puerto de Veracruz. Siempre se pensó que algo similar le hacía falta a Cancún, en ese entonces todo estaba dirigido a los turistas, no había nada pensado en gente local. En 2014 abrimos el restaurante que oficialmente se llamaba Coffee&Food, con la idea que con el tiempo alcanzáramos nuestra propia identidad. Sirviendo siempre a nuestros comensales el mejor café de Cancún.</p>
			</div>

		</div>

		<div class = "cinco">
			
		</div>

	</section>


		
	<footer>
		
		<div class = "pie">

					<p class = "textooo"><b>Dirección: </b><span>Paseos Nikté Supermanzana 255, Manzana 48, Lote 8 Avenida Galaxias del Sol.</span></p>
					<p class = "textooo"><b>Teléfono: </b><span>(998) 292 21 37</span></p>
					<p class = "textooo"><b>Email: </b><span>cafe@utcancun.edu.mx</span></p>

		</div>

	</footer>

	<script type="text/javascript">
		
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


	</script>


</body>
</html>