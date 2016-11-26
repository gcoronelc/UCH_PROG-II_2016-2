<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>RESUMEN POR SUCURSAL</title>
  </head>
  <body>
    <?php include '../util/header.php'; ?>
    <h2>RESUMEN POR SUCURSAL</h2>
    <table border="1">
      <thead>
        <tr>
          <th>SUCURSAL</th>
          <th>SOLES</th>
          <th>DOLARES</th>
        </tr>
      <tbody>
        <?php foreach ($lista as $rec): ?>
          <tr>
            <td><?php echo $rec["sucursal"]; ?></td>
            <td><?php echo $rec["soles"]; ?></td>
            <td><?php echo $rec["dolares"]; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </thead>
  </table>

</body>
</html>
