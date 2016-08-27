<!DOCTYPE html>
<html>
  <head>
    <title>LOGON</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <div class="egcc_page">
      <?php include '../util/cabecera.php'; ?>
      <h1>INGRESO AL SISTEMA</h1>
      <form method="post" action="../service/logon.php">
        Usuario: <input type="text" name="usuario" /><br/>
        Clave: <input type="password" name="clave" /><br/>
        <input type="submit" value="Ingresar" />
      </form>
    </div>
  </body>
</html>
