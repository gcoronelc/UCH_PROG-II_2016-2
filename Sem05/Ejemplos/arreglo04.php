<?php // Arreglo Asociativo 

$rec["codigo"] = "ART001";
$rec["nombre"] = "Impresora";
$rec["precio"] = 250.00;

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>DATOS</h1>
    <table border="1">
      <?php foreach ($rec as $key => $value) { ?>
      <tr>
        <td><?php echo $key; ?></td>
        <td><?php echo $value; ?></td>
      </tr>
      <?php } ?>
    </table>
  </body>
</html>
