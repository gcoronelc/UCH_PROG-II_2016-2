<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
    <title>APP SEMANA 03</title>
  </head>
  <body>
    <div class="egcc_page">
      <header class="egcc_header">
        <?php include '../util/header.php'; ?>
      </header>
      <section class="egcc_menu">
        <?php include '../util/menu.php'; ?>
      </section>
      <main class="egcc_content">
        
          <h1>VENTA</h1>
          <form method="post" action="../service/ventaService.php">
              <table>
                  <tr>
                      <td>Tipo Doc.:</td>
                      <td>
                          <input type="radio" value="F" name="tipo"/> Factura
                          <input type="radio" value="B" name="tipo"/> Boleta
                      </td>
                  </tr>
                  <tr>
                      <td>Producto:</td>
                      <td>
                          <select name="prod">
                              <option value="CC">Coca Cola</option>
                              <option value="CH">Chocolate</option>
                              <option value="EM">Empanada</option>
                              <option value="GU">Guarana</option>
                          </select>
                      </td>
                  </tr>
                  <tr>
                      <td>Cantidad:</td>
                      <td><input type="text" name="cant" /></td>
                  </tr>
                  <tr>
                      <td colspan="2">
                          <input type="submit" value="Procesar" />
                      </td>
                  </tr>
              </table>
          </form>
        
          <?php if( isset($total) ): ?>
          <h1>REPORTE</h1>
          <table>
            <tr>
                <td>Tipo Doc.:</td>
                <td><?php echo $tipo; ?></td>
            </tr>
            <tr>
                <td>Producto:</td>
                <td><?php echo $prod; ?></td>
            </tr>
            <tr>
                <td>Precio:</td>
                <td><?php echo $precio; ?></td>
            </tr>
            <tr>
                <td>Cantidad:</td>
                <td><?php echo $cant; ?></td>
            </tr>
            <?php if($tipo == "F"): ?>
            <tr>
                <td>Importe:</td>
                <td><?php echo $importe; ?></td>
            </tr>
            <tr>
                <td>Impuesto:</td>
                <td><?php echo $impuesto; ?></td>
            </tr>
            <?php endif; ?>
            <tr>
                <td>Total:</td>
                <td><?php echo $total; ?></td>
            </tr>
          </table>
          <?php endif; ?>
      </main>
      <footer class="egcc_footer">
        <?php include '../util/footer.php'; ?>
      </footer>
    </div>
  </body>
</html>
