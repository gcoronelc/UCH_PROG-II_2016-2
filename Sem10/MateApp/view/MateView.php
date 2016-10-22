<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>MCD y MCM</h1>
    <form method="post" action="../controller/MateController.php">
      <p>
        Número 1: <input type="text" name="num1"/>
      </p>
      <p>
        Número 2: <input type="text" name="num2"/>
      </p>
      <p><input type="submit" value="Procesar"/></p>
      
    </form>
    
    <?php if (isset($model)): ?>
    <p>Número 1: <?php echo $model->getNum1(); ?></p>
    <p>Número 2: <?php echo $model->getNum2(); ?></p>
    <p>MCD: <?php echo $model->getMcd(); ?></p>
    <p>MCM: <?php echo $model->getMcm(); ?></p>
    <?php endif; ?>
  </body>
</html>
