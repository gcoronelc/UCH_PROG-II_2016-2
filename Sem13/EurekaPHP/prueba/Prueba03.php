<?php

include '../db/AccesoDB.php';
include '../service/CuentaService.php';


try {
  $service = new CuentaService();
  
  $rec = $service->getDataSucursal("001");
  
  foreach ($rec as $key => $value) {
    echo "$key -> $value <br/>";
  }
  
} catch (Exception $exc) {
  echo $exc->getMessage();
}


?>
