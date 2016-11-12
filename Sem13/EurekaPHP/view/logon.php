<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>INICIO DE SESION</h1>

    <?php if (isset($error)): ?>
    <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post" action="../controller/logonController.php">
      <fieldset>
        <legend>Datos del Usuario</legend>

        <label>Usuario:</label>
        <input type="text" name="usuario" /><br/>

        <label>Clave:</label>
        <input type="password" name="clave" /><br/>

      </fieldset>
      <input type="submit" value="Ingresar" />
    </form>
  </body>
</html>
