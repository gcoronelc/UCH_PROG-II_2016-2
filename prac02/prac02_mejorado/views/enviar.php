<?php
include("../services/service.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ventas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	
	<div class="content">
	  <h1 class="title">EUREKABANK</h1>
	  <div class="form">
	    <h2 class="title">tipo de crédito : <?php echo $tipo; ?></h2>
	    <h2 class="title">Capital : <?php echo $importe; ?></h2>
	    <h2 class="title">Interes mensual : <?php echo $porcInteres*100; ?>%</h2>
	    <h2 class="title">Tiempo : <?php echo $meses; ?> meses</h2>
	    <table style="width:90%">
		  <tr>
		    <th>Cuota</th>
		    <th>Capital</th> 
		    <th>Interes</th>
		    <th>Total</th>
		  </tr>
		  <?php foreach ($arregloTotal as $item) { ?>
		  	<tr>
			    <td><?php echo $item["cuota"]; ?></td>
			    <td><?php echo $item["capital"]; ?></td>
			    <td><?php echo $item["interes"]; ?></td>
			    <td><?php echo $item["total"] ?></td>
			</tr>
		  <?php } ?>
		  
		</table>

	    <div class="form-item">
	        <a type="submit"  class="btn-enviar"  style="text-align:center; text-decoration:none;" href="../index.php">Regresar </a>
	    </div>

	    <h3 class="title" style="text-align:left;padding-left:20px;">integrantes :</h3>
	  <ul>
	  	<li>Galarreta Palacios, Manuel</li>
	  	<li>Trinidad Quiñones, Oscar</li>
	  	<li>Zapata Paulini, Joselyn</li>
	  	<li>Condori Chipana, Marco</li>
	  </ul>
	  </div>

	  
	</div>
</body>
</html>