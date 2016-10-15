<?php

include './model/VentaModel.php';
include './service/VentaService.php';

// Datos
$model = new VentaModel();
$model->setPrecio(1000.0);
$model->setCant(15);

// Proceso
$service = new VentaService();
$service->procesar($model);

// Reporte
echo "Importe: {$model->getImporte()}<br/>";
echo "Impuesto: {$model->getImpuesto()}<br/>";
echo "Total: {$model->getTotal()}<br/>";

?>