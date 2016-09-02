<?php

$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];

$importe = $precio * $cantidad;
$impuesto = $importe * 0.18;
$total = $importe + $impuesto;

?>

<!DOCTYPE html>
<html>
<head>
	<title>ventas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<div class="content">
	  <h1 class="title">ventas</h1>
	  <div class="form">
	    <h2 class="title">importe : <?php echo "$importe"; ?></h2>
	    <h2 class="title">impuesto : <?php echo "$impuesto"; ?></h2>
	    <h2 class="title">total : <?php echo "$total"; ?></h2>

	    <div class="form-item">
	        <a type="submit"  class="btn-enviar"  style="text-align:center; text-decoration:none;" href="index.php">Regresar </a>
	    </div>
	  </div>

	  
	</div>
</body>
</html>