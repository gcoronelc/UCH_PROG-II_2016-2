<?php
require '../lib/miLibreria.php';
// Dato
$n = rand(0, 20);
// Proceso
$f = fn_factorial($n);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>DEMO</h1>
    <p>N: <?php echo $n; ?></p>
    <p>Fact: <?php echo $f; ?></p>
  </body>
</html>
