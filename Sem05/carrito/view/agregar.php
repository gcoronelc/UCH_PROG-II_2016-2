<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php include '../util/menu.php'; ?>
    <h2>AGREGAR PRODUCTO</h2>
    <form method="post" action="../service/agregarService.php">
      <table>
        <tr>
          <td>Nombre:</td>
          <td><input type="text" name="nombre"/></td>
        </tr>
        <tr>
          <td>Precio:</td>
          <td><input type="text" name="precio"/></td>
        </tr>
        <tr>
          <td>Cantidad:</td>
          <td><input type="text" name="cant"/></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Procesar"/></td>
        </tr>
      </table>
    </form>
  </body>
</html>
