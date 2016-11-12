<?php

session_start();

include '../db/AccesoDB.php';
include '../service/CuentaService.php';

$destino = "";
$error = "";
$lista = array();

try {
  $service = new CuentaService();
  
  $lista = $service->resumenPorSucursal();
   
  $destino = "r001View.php";
   
} catch (Exception $exc) {
  
  $error = $exc->getMessage();
  $destino = "main.php";
  
}

include "../view/$destino";

?>