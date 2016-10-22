<?php
  include '../model/MateModel.php';
  include '../service/MateService.php';
  
  // Datos
  $n1 = $_POST["num1"];
  $n2 = $_POST["num2"];
  $model = new MateModel();
  $model->setNum1($n1);
  $model->setNum2($n2);
  
  // Proceso
  $service = new MateService();
  $service->procesar($model);
  
  // Salida
  include '../view/MateView.php';
  
?>
