<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php
	header('Content-Type: text/html; charset=utf-8' );
	$x = 20; # $x es un entero
	echo("\$x es de tipo " . gettype($x) . "<br>");
	$x = "Viva el Perú"; # $x es un cadena
	echo("\$x es de tipo " . gettype($x) . "<br>");
?>
