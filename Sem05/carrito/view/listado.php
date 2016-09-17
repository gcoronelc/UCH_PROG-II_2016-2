<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php include '../util/menu.php'; ?>
    <h2>LISTADO DE CARRITO</h2>
    <table>
      <tr>
        <td>PRODUCTO</td>
        <td>PRECIO</td>
        <td>CANT</td>
        <td>IMPORTE</td>
      </tr>
      
      <?php foreach ($carrito as $rec): ?>
      <tr>
        <td><?php echo $rec["nombre"] ?></td>
        <td><?php echo $rec["precio"] ?></td>
        <td><?php echo $rec["cant"] ?></td>
        <td><?php echo $rec["importe"] ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
    
  </body>
</html>
