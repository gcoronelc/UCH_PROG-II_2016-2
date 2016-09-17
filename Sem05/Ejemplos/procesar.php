<?php 
session_start(); // Iniciar sesión
$_SESSION["nombre"] = $_REQUEST["nombre"]
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>Hola: <?php echo $_SESSION["nombre"] ?></h1>
    <a href="ver.php">Otra página</a>
  </body>
</html>
