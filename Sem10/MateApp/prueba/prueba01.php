<?php

include '../model/MateModel.php';
include '../service/MateService.php';

// Datos
$model = new MateModel();
$model->setNum1(15);
$model->setNum2(20);

// Proceso
$service = new MateService();
$service->procesar($model);

// Reporte
echo "Num1: {$model->getNum1()}<br/>";
echo "Num2: {$model->getNum2()}<br/>";
echo "MCD: {$model->getMcd()}<br/>";
echo "MCM: {$model->getMcm()}<br/>";

?>

