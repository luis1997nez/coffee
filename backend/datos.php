<?php

include('conexion.php');

$coneccion = $conectar;

$busqueda=$_POST['nombrecancion'];

$resultados="SELECT * FROM nombres WHERE nombre LIKE '%$busqueda%'";

$res=$coneccion->query($resultados);

while ($fila=$res->fetch_array(MYSQLI_BOTH)){
		echo $fila['nombre'];
	}

?>