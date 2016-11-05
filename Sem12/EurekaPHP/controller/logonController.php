<?php

session_start();

include '../db/AccesoDB.php';
include '../service/LogonService.php';

$destino = "";
$error = "";

try {
  
  // Datoa
  $usuario = $_POST["usuario"];
  $clave = $_POST["clave"];
  // Proceso
  $service = new LogonService();
  $rec = $service->validar($usuario, $clave);
  $_SESSION["usuario"] = $rec;
  
  $destino = "main.php";
  
} catch (Exception $exc) {

  $error = $exc->getMessage();
  $destino = "logon.php";
  
}

include "../view/$destino";

?>