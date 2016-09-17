<?php
session_start();

// Datos
$rec["nombre"] = $_POST["nombre"];
$rec["precio"] = $_POST["precio"];
$rec["cant"] = $_POST["cant"];

// Proceso de calculo
$rec["importe"] = $rec["precio"] * $rec["cant"];

// Proceso de grabar en session
if(isset($_SESSION["carrito"])){
  $carrito = $_SESSION["carrito"];
} else {
  $carrito = array();
}
$carrito[] = $rec;
$_SESSION["carrito"] = $carrito;

$mensaje = "Producto registrado correctamente.";

include '../view/main.php';

?>