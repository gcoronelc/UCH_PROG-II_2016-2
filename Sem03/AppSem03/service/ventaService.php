<?php

// Datos
$tipo = $_POST["tipo"];
$prod = $_POST["prod"];
$cant = $_POST["cant"];

// Precio
$precio = 0;
switch ($prod) {
    case "CC":
        $precio = 3.50;
        $prod = "Coca Cola";
        break;
    case "CH":
        $precio = 4.60;
        $prod = "Chocolate";
        break;
    case "EM":
        $precio = 6.60;
        $prod = "Empanada";
        break;
    case "GU":
        $precio = 2.00;
        $prod = "Guarana";
        break;
}
// Total de la venta
$total = $precio * $cant;

// Si es factura
if( $tipo == "F"){
    $importe = $total / 1.18;
    $impuesto = $total - $importe;
}

// Reporte
include '../view/proy05.php';

?>

