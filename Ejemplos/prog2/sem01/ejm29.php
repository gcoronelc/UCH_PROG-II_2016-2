<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php header('Content-Type: text/html; charset=utf-8' ); ?>
<font face="Helvetica">
<?php
	$a = 10;
	$b = 40;
	echo("\$a = $a<br>\n");
	echo("\$b = $b<br>\n");
	$b += $a;
	echo("El nuevo valor de \$b es $b");
?>
<h2>OTRO CASO</h2>
<?php
  $a = 50;
  $b = 20;
  echo("\$a = $a<br>\n");
	echo("\$b = $b<br>\n");
	$a %= $b;
	echo("El nuevo valor de \$a es $a");
?>
<h2>OTRO CASO</h2>
<?php
  $a = 50;
  $b = 70;
  $cad = ($a>$b)?"PERU CAMPEON":"PHP CAMPEON";
  echo($cad);
?>
</font>