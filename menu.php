<!DOCTYPE html>
<html>
<head>

	<title>Nuestro menú</title>
	<link rel="stylesheet" type="text/css" href="estilos/menu.css">

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
			
			<h1 class = "titulo">NUESTRO MENÚ</h1>

			<h5 class = "sub1">El mejor sabor está en nuestra carta</h5>
            <p class="text1">Le presentamos nuestra variaedad de alimentos y bebidas de nuestro restaurante.</p>


		</div>
		
	</section>

	<section>
		<div class="separador"></div>
	</section>

	<section>
		
		<div class = "buscar">

			<form action="" method="POST">
				<input class = "texto" type="text" name="buscador">
				<input class = "boton" type="submit" name="enviar" value = "Buscar">
			</form>

			<?php

				if(isset($_POST['enviar'])){

					include('conexion.php');

					$busqueda = $_POST['buscador'];

					if($busqueda==null){

						echo " ";

					}else{

						$resultados="SELECT * FROM productos WHERE nombre COLLATE UTF8_GENERAL_CI LIKE '%$busqueda%'";
	
						$res=$conexion->query($resultados);
	
						if($res->num_rows>=1){
							while($fila=$res->fetch_array(MYSQLI_BOTH)){
								$des = $fila['nombre'];
								$ima = $fila['image'];
								$pre = $fila['precio'];
								echo "<div class = 'resultado'><img class = 'image' src=\"imagenes.php?getter=$ima\"><h1 class = 'information1'>$des</h1><p class = 'precios'>$$pre</p></div>";
								echo "<br>";
						}

						}else{
							echo "<div class = 'resultadod'>No hay resultados</a>";
						}
	
					}

					mysqli_close($conexion);

				}
			?>
			
		</div>

	</section>

	<section>
		<div class="separador"></div>
	</section>

	<section>
		
		<div class = "cuatro" id = "event">
			
			<div class = "bebidas">
				<h1 class = "tipo">BEBIDAS</h1>
				<div class = "elemento" onclick="precio1()">
					<img class = "image" src="images/menu/frappuccino.jpg">
					<h1 class = "nombre">FRAPPUCCINO</h1>
					<p class = "descrip">El delicioso sabor al café frio.</p>
				</div>
				<div class = "elemento" onclick="precio2()">
					<img class = "image" src="images/menu/americano.jpg">
					<h1 class = "nombre">CAFÉ AMERICANO</h1>
					<p class = "descrip">El más amargo y activo.</p>
				</div>
				<div class = "elemento" onclick="precio3()">
					<img class = "image" src="images/menu/moca.jpg">
					<h1 class = "nombre">CAFÉ MOCA</h1>
					<p class = "descrip">El más chocolatoso del hogar.</p>
				</div>
				<div class = "elemento" onclick="precio4()">
					<img class = "image" src="images/menu/copaccino.jpg">
					<h1 class = "nombre">COPACCINO</h1>
					<p class = "descrip">Deliciosa copa de café napolitano.</p>
				</div>
				<div class = "elemento" onclick="precio5()">
					<img class = "image" src="images/menu/limonada.jpg">
					<h1 class = "nombre">LIMONADA</h1>
					<p class = "descrip">Deliciosa copa quita sed.</p>
				</div>
				<div class = "elemento" onclick="precio1()">
					<img class = "image" src="images/menu/americano.jpg">
					<h1 class = "nombre">Té Chaí</h1>
					<p class = "descrip">Delicioso y caliente té chaí.</p>
				</div>
			</div>

			<div class = "postres">
				<h1 class = "tipo">ALIMENTOS</h1>
				<div class = "elemento" onclick="precio2()">
					<img class = "image" src="images/menu/comida1.jpg">
					<h1 class = "nombre">CHOCO BOLITA</h1>
					<p class = "descrip">Panecito bañado y relleno de chocolate.</p>
				</div>
				<div class = "elemento" onclick="precio3()">
					<img class = "image" src="images/menu/comida2.jpg">
					<h1 class = "nombre">PANINI</h1>
					<p class = "descrip">Sandwitch de jamon serrano y queso con verduras calientito.</p>
				</div>
				<div class = "elemento" onclick="precio4()">
					<img class = "image" src="images/menu/comida3.jpg">
					<h1 class = "nombre">SEMITA</h1>
					<p class = "descrip">Hamburguesa de tres quesos.</p>
				</div>
				<div class = "elemento" onclick="precio5()">
					<img class = "image" src="images/menu/comida4.jpg">
					<h1 class = "nombre">CHEESECAKE</h1>
					<p class = "descrip">Delicioso pastel de queso con cubierta de mermelada.</p>
				</div>
				<div class = "elemento" onclick="precio1()">
					<img class = "image" src="images/menu/minicake.jpg">
					<h1 class = "nombre">MINICAKE</h1>
					<p class = "descrip">Pequeño y esponjoso pastel de chocolate.</p>
				</div>
				<div class = "elemento" onclick="precio2()">
					<img class = "image" src="images/menu/tirami.jpg">
					<h1 class = "nombre">TIRAMISÚ</h1>
					<p class = "descrip">El sabor del café en un pastel.</p>
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

			//---------------

		function precio1(){
			alert("PRECIO: $45.00");
		}

		function precio2(){
			alert("PRECIO: $70.00");
		}

		function precio3(){
			alert("PRECIO: $32.00");
		}

		function precio4(){
			alert("PRECIO: $70.00");
		}

		function precio5(){
			alert("PRECIO: $40.00");
		}


			



	</script>

</body>
</html>