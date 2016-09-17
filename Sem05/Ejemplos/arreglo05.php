<?php // Arreglo Asociativo 

$rec1["codigo"] = "ART001";
$rec1["nombre"] = "Impresora";
$rec1["precio"] = 250.00;

$rec2["codigo"] = "ART002";
$rec2["nombre"] = "Laptop";
$rec2["precio"] = 2500.00;

$rec3["codigo"] = "ART003";
$rec3["nombre"] = "Disco Duro";
$rec3["precio"] = 350.00;

$lista = array($rec1, $rec2, $rec3);

//print_r($lista);
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
      
      <tr>
        <th>CODIGO</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
      </tr>
      
      <?php foreach ($lista as $rec) { ?>
      <tr>
        <td><?php echo $rec["codigo"]; ?></td>
        <td><?php echo $rec["nombre"]; ?></td>
        <td><?php echo $rec["precio"]; ?></td>
      </tr>
      <?php } ?>
    </table>
  </body>
</html>
