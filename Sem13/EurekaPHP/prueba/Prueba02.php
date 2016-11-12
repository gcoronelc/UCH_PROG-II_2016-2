<?php

include '../db/AccesoDB.php';
include '../service/CuentaService.php';


try {
  $service = new CuentaService();
  
  $lista = $service->resumenPorSucursal();
   
  foreach ($lista as $rec) {
    echo $rec["sucursal"] . " | " .
            $rec["soles"] . " | " .
            $rec["dolares"] . " | <br/>" ;
  }
  
} catch (Exception $exc) {
  echo $exc->getMessage();
}


?>
