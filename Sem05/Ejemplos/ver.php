<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>Bien <?php echo $_SESSION["nombre"] ?></h1>
  </body>
</html>
