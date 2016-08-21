<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<!-- Constante definida por el usuario. -->
<!-- Las constantes son sensibles a mayúsculas y minúsculas. -->
<!-- Normalmente se utilizan las mayúsculas para definir constantes. -->

<?php header('Content-Type: text/html; charset=utf-8' ); ?>
<font face="Helvetica">
<?php
	define("PI",3.141516);
	$radio = 5;
	$area = PI * $radio * $radio;
	echo("PI: " . PI . "<br>");
	echo("Radio: $radio<br>");
	echo("Area: $area");
?>
</font>