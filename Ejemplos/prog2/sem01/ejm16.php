<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<!-- Las variables dentro de una cadena se expanden. -->

<?php header('Content-Type: text/html; charset=utf-8' ); ?>

<div style="font-family: Helvetica;font-size: 18px;">
<?php
	$a = 5;
	$b = 9;
	$c = $a * $b;
	echo("Variables dentro de<br>\n");
	echo("una cadena se expanden<br>\n");
	echo("\$a = $a<br>\n");
	echo("\$b = $b<br>\n");
	echo("\$c = $c<br>\n");
?>
</div>