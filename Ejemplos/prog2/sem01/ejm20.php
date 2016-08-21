<!-- Author: Eric Gustavo Coronel Castillo -->
<!-- Blog: gcoronelc.blogspot.com -->

<?php header('Content-Type: text/html; charset=utf-8' ); ?>
<font face="Helvetica">
<?php
	$cad = "<b>Alianza Campeón</b><br>";
	echo($cad);
	if ($cad){
		$estado = "\nEs verdadero";
	}else{
		$estado = "\nEs falso";
	}
	echo($estado);
?>
</font>