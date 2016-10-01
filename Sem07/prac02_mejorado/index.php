<?php 
$cantidad = 0;
if (isset($_POST["tipo"])) {
	$tipo= $_POST["tipo"];
	if ($tipo == "personal") {
		$cantidad = 5;
	}else{
		$cantidad = 7;
	}
	include("views/interes.php");
}else{
	include("views/credito.php");
}



 ?>