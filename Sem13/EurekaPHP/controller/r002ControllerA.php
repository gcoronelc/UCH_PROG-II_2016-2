<?php

session_start();

include '../db/AccesoDB.php';
include '../service/CuentaService.php';

$destino = "";
$error = "";
$cboSucursales = array();

try {
  $service = new CuentaService();
  
  $cboSucursales = $service->getCboSucursales();
   
  $destino = "r002View.php";
   
} catch (Exception $exc) {
  
  $error = $exc->getMessage();
  $destino = "main.php";
  
}


include "../view/$destino";

?>