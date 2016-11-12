<?php

session_start();

include '../db/AccesoDB.php';
include '../service/CuentaService.php';

$destino = "";
$error = "";
$cboSucursales = array();
$recSucursal = array();

// Datos
$sucursal = $_POST["sucursal"];
$moneda = $_POST["moneda"];


try {
  $service = new CuentaService();
  
  $cboSucursales = $service->getCboSucursales();
  $recSucursales = $service->getDataSucursal($sucursal);
  $resumen       = $service->resumenPorTipoMov($sucursal, $moneda);
   
  $destino = "r002View.php";
   
} catch (Exception $exc) {
  
  $error = $exc->getMessage();
  $destino = "r002View.php";
  
}


include "../view/$destino";

?>