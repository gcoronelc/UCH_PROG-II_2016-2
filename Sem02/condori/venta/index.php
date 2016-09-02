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
	    <form action="enviar.php" class="form-container" method="post">
	      <div class="form-item ">
	        <input type="text" required="required" id="name" class="input" name="precio"/>
	        <label for="name" class="label">Precio</label>
	      </div>
	      <div class="form-item ">
	        <input type="text" required="required" id="lastname" class="input" name="cantidad"/>
	        <label for="lastname" class="label">cantidad</label>
	      </div>
	      <div class="form-item">
	        <input type="submit" value="Enviar" class="btn-enviar"/>
	      </div>
	    </form>
	  </div>
	</div>
</body>
</html>