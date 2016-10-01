
<!DOCTYPE html>
<html>
<head>
	<title>EurekaBank</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="content">
	  <h1 class="title">EurekaBank</h1>
	  <div class="form">
	  <h2 class="title">Prestamos</h2>
	    <form action="views/enviar.php?tipo=<?php echo "$tipo"; ?>" class="form-container" method="post">

	    	<div class="form-item ">
		        <input type="text" required="required" id="importe" class="input" name="importe"/>
		        <label for="importe" class="label">Importe</label>
	      	</div>

			<div class="form-item">
				<select id="meses" name="meses" class="input">
			    <?php for ($i=1; $i <= $cantidad; $i++) { ?>
					<?php $resultado = 6 + ($i * 6)  ?>
			    	<option value="<?php echo $resultado  ?>"><?php echo $resultado  ?></option>
			    <?php } ?>
				</select>
				<label for="meses" class="label">Tipo credito</label>
			</div>

	      <div class="form-item">
	        <input type="submit" value="Siguiente" class="btn-enviar"/>
	      </div>
	    </form>
	    <h2 class="title" style="text-align:left;padding-left:20px;">integrantes :</h2>
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