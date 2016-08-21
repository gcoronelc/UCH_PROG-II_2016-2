<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php header('Content-Type: text/html; charset=utf-8' ); ?>

<div style="font-family: Helvetica;font-size: 18px;">
<?php
	$nombre = "Gustavo Coronel";
	$cargo = "Jefe de Sistemas";
	$salario = 10000.00;
	echo("Nombre: " . $nombre . "<br/>\n");
	echo("Cargo: " . $cargo . "<br/>\n");
	echo("Salario: \$ " . number_format($salario, 2, '.', ','));
?>
</div>