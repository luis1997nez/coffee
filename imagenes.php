<?php

$directorio="images/alimentos";

$archivo=$_GET['getter'];

$file=file($directorio."/".$archivo);

$file2=implode("", $file);

echo ($file2);

?>