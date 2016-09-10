<?php
require '../lib/miLibreria.php';
// Dato
$n1 = rand(0, 20);
$n2 = rand(0, 20);
// Proceso
$n1_ori = $n1;
fn_add($n1, $n2);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>DEMO</h1>
    <p>N1: <?php echo $n1_ori; ?></p>
    <p>INC: <?php echo $n2; ?></p>
    <p>RESULT: <?php echo $n1; ?></p>
  </body>
</html>
