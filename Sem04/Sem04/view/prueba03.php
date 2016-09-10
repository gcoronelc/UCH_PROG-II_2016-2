<?php
require '../lib/miLibreria.php';
// Dato
$n1 = rand(0, 20);
$n2 = rand(0, 20);
// Proceso
$p = fn_promedio($n1, $n2);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>DEMO</h1>
    <p>N1: <?php echo $n1; ?></p>
    <p>N2: <?php echo $n2; ?></p>
    <p>PROM: <?php echo $p; ?></p>
  </body>
</html>
