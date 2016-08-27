<?php

// Datos
$precio = $_POST["precio"];
$cant = $_POST["cant"];

// Proceso
$total = $precio * $cant;
$importe = $total / 1.18;
$impuesto = $total - $importe;

// Resultado
include '../view/VentaView.php';


?>