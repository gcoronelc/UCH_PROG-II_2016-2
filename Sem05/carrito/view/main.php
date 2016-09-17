<?php 
if( ! isset($mensaje) ){
  session_start(); 
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>DEMO CARRITO</title>
  </head>
  <body>
    <?php include '../util/menu.php'; ?>
    
    <?php if (isset($mensaje)): ?>
    <p><?php echo $mensaje; ?></p>
    <?php endif; ?>
  </body>
</html>
