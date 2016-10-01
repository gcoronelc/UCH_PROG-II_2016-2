<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>TABLA DE MULTIPLICAR</h1>
    <form method="post" action="../service/calculaTabla.php">
      Tabla:
      <input type="text" name="tabla" />
      <input type="submit" value="Procesar" />
    </form>

    <?php if (isset($arregloTotal)): ?>
      <h2>RESULTADO</h2>
      <p>Tabla del <?php echo $tabla ?></p>
      <table border="1">
        <?php foreach ($arregloTotal as $item): ?>
          <tr>
            <td><?php echo $item["col1"]; ?></td>
            <td><?php echo $item["col2"]; ?></td>
            <td><?php echo $item["col3"]; ?></td>
            <td><?php echo $item["col4"]; ?></td>
            <td><?php echo $item["col5"]; ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    <?php endif; ?>
  </body>
</html>
