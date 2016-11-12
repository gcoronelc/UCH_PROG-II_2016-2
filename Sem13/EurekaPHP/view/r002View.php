<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>RESUMEN POR SUCURSAL 2</title>
  </head>
  <body>
    <?php include '../util/header.php'; ?>
    <h2>RESUMEN POR SUCURSAL 2</h2>

    <form method="post" action="r002ControllerB.php">
      <fieldset>
        <legend>Criterios de la consulta</legend>

        <label>Sucursal</label>
        <select name="sucursal">
          <?php foreach ($cboSucursales as $r): ?>
            <option value="<?php echo $r["cod"]; ?>">
              <?php echo $r["cod"] . " - " . $r["name"]; ?>
            </option>
          <?php endforeach; ?>
        </select>

        <label>Moneda</label>
        <select name="moneda">
          <option value="01">Soles</option>
          <option value="02">Dolares</option>
        </select>

        <input type="submit" value="Procesar" />

      </fieldset>
    </form>

    <h2>RESULTADO</h2>

    <!-- Datos de la Sucursal -->
    <?php if (isset($recSucursales)): ?>
      <h3>Datos de la Sucursal</h3>
      <div style="margin: 10px; padding: 5px;">
        Código: <?php echo $recSucursales["chr_sucucodigo"] ?><br/>
        Nombre: <?php echo $recSucursales["vch_sucunombre"] ?><br/>
      </div>
    <?php endif; ?>

    <?php if (isset($resumen)): ?>
      <h3>RESUMEN POR TIPO DE MOVIMIENTO</h3>
      <table border="1">
        <thead>
          <tr>
            <th>COD</th>
            <th>NOMBRE</th>
            <th>MOVS</th>
            <th>IMPORTE</th>
          </tr>
        <tbody>
          <?php foreach ($resumen as $rec): ?>
            <tr>
              <td><?php echo $rec["tipocodigo"]; ?></td>
              <td><?php echo $rec["tiponombre"]; ?></td>
              <td><?php echo $rec["cantmov"]; ?></td>
              <td><?php echo $rec["importe"]; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </thead>
    </table>
  <?php endif; ?>

</body>
</html>
