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
        <h1>PROYECTO 02</h1>
        <form method="post" action="../service/proy02Service.php">
          <table>
            <tr>
              <td>Número 1:</td>
              <td><input type="text" name="num1"/></td>
            </tr>
            <tr>
              <td>Número 2:</td>
              <td><input type="text" name="num2"/></td>
            </tr>
            <tr>
              <td><input type="submit" value="Procesar"/></td>
            </tr>
          </table>
        </form>
        
        <?php if( isset($mcd) ): ?>
        <h1>RESULTADO</h1>
        <table>
            <tr>
              <td>Número 1:</td>
              <td><?php echo $num1; ?></td>
            </tr>
            <tr>
              <td>Número 2:</td>
              <td><?php echo $num2; ?></td>
            </tr>
            <tr>
              <td>MCD:</td>
              <td><?php echo $mcd; ?></td>
            </tr>
            <tr>
              <td>MCM:</td>
              <td><?php echo $mcm; ?></td>
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
