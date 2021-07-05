<!DOCTYPE html>
<html>
<head>

	<title>Contáctanos</title>
	<link rel="stylesheet" type="text/css" href="estilos/contacto.css">

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

			<h1 class = "titulo">CONTÁCTANOS</h1>

			<h5 class = "sub1">¿Alguna duda o recomendaciones?</h5>
            <p class="text1">Con nuestro sistema de contacto podrás comunicarte desde nuestro sitio web, será un placer escucharlo.</p>

		</div>
		
	</section>

	<section>
		<div class="separador"></div>
	</section>

	<section>
		
		<div class = "cuatro">

			<div class = "contenedor">

				<div class = "informacion">
					
					<h5 class = "titulo2">Información de ubicación</h5>
					<p class = "texto2"><b>Dirección: </b><span>Paseos Nikté Supermanzana 255, Manzana 48, Lote 8 Avenida Galaxias del Sol.</span></p>
					<p class = "texto2"><b>Teléfono: </b><span>(998) 292 21 37</span></p>
					<p class = "texto2"><b>Email: </b><span>cafe@utcancun.edu.mx</span></p>

				</div>

				<div class = "formu">
					
					<form action="#" method = "POST" class="formulario">
            	
	                	<input type="text" class="campo" placeholder="Nombre completo" name = "nombre" required>

	                	<input type="text" class="campo" placeholder="Correo electrónico" name = "correo" required>

	                	<input type="text" class="campo2" placeholder="Asunto" name = "asunto" required>
	                	

						<textarea id="" cols="30" rows="7" class="campo3" placeholder="Información" name = "mensaje" required></textarea>
						<input type="submit" name = "enviar" value="ENVIAR" class="boton3">
              
            		</form>

            		<?php 

            			

						if(isset($_POST['enviar'])){

							include('conexion.php');

							$nombre = $_POST['nombre'];
							$correo = $_POST['correo'];
							$asunto = $_POST['asunto'];
							$mensaje = $_POST['mensaje'];

							$insertar = "INSERT INTO contacto(nombreUsu, email, asunto, mensaje) VALUES('$nombre', '$correo', '$asunto', '$mensaje')";
	
					 		$resultado = mysqli_query($conexion, $insertar);

 							if (!$resultado){
 						
 							    echo 'Error al registrarse';
 						
 							}else {
 						
 							   echo '<script>
 						
 						 	   alert("Reservación enviada");
 						
 							   window.history.go(-1);
 						
 						 	   </script>';
 						
 						 	   exit;
 						
 						    }

					 	   //cerrar conexion
 							mysqli_close($conexion);
	
					}

				?>

				</div>




			</div>
	

				<div class = "contenedor">

					<h5 class = "titulo2">Mapá de ubicación</h5>
					
					<div class = "mapa">
			
						<iframe class = "mapa1" src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d119108.30856133786!2d-86.966767!3d21.1071976!3m2!1i1024!2i768!4f13.1!3m2!1m1!2sUniversidad+Tecnologica+de+Canc%C3%BAn!5e0!3m2!1ses!2smx!4v1564348292722!5m2!1ses!2smx" width="2000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

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

</body>
</html>