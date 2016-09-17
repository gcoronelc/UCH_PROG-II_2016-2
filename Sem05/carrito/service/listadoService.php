<?php
session_start();
// Recuperar carrito
if( isset($_SESSION["carrito"])){
  $carrito = $_SESSION["carrito"];
  include '../view/listado.php';
} else {
  $mensaje = "Carrito no existe.";
  include '../view/main.php';
}

?>