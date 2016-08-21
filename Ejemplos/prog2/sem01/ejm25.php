<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php header('Content-Type: text/html; charset=utf-8' ); ?>
<font face="Helvetica">
<?php

	$A = 18;
	$B = 15.5;
	$C = "MySQL la Base de Datos más rápida";
  
	printf("El valor de A es: %d<br>\n", $A);
	printf("Ahora relleno con ceros: %06d<br>\n", $A);
  
	printf("El valor de B es: %f<br>\n", $B);
  printf("Ahora relleno sin ceros: %8.2f<br>\n", $B);
	printf("Ahora relleno con ceros: %08.2f<br>\n", $B);
  
	printf("El valor de C es: %s<br>", $C);
?>
</font>