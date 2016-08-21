<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php header('Content-Type: text/html; charset=utf-8' ); ?>

<div style="font-family: Helvetica;font-size: 18px;">
<?php
	$nombre = "Claudia";
	$edad = 25;
	$salario = 3500.00;
	echo("El tipo de \$nombre es: " . gettype($nombre) . "<br>\n");
	echo("El tipo de \$edad es: " . gettype($edad) . "<br>\n");
	echo("El tipo de \$salario es: " . gettype($salario));
?>
</div>