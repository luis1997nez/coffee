<?php

	$server = "localhost";
	$user = "root";
	$password = "";
	$bd = "coffee";

	$conexion = mysqli_connect($server, $user, $password, $bd);

	/*
	if($conectar){
		echo "Se ha conectado";
	}else{
		echo "No se ha conectado";
	}
	
	
	echo "<br>";

	$busqueda=$_POST['nombrecancion'];

	$resultados="SELECT * FROM nombres WHERE nombre LIKE '%$busqueda%'";

	$res=$conectar->query($resultados);

	if($res->num_rows>=1){
		while($fila=$res->fetch_array(MYSQLI_BOTH)){
				return $fila['nombre'];
		}
	}else{
		return "No hay resultados";
	}
	*/
?>