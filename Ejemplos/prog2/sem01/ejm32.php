<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php header('Content-Type: text/html; charset=utf-8' ); ?>
<font face="Helvetica">
<?php
	$a = rand(0,20);
	$b = rand(0,20);
	if($a>14 and $b>14){
		$cond = "Condición: Aprobado";
	}
	else{
		$cond = "Condición: Desaprobado";
	}
	echo( "\$a = $a<br>\n" );
	echo( "\$b = $b<br>\n" );
	echo( $cond );
?>
</font>