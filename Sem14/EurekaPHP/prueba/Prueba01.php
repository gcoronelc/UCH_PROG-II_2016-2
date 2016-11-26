<?php

include '../db/AccesoDB.php';
include '../service/LogonService.php';


try {
  $service = new LogonService();
  
  $rec = $service->validar("lcastro", "flacaa");
  
  foreach ($rec as $key => $value) {
    echo "$key -> $value";
  }
  
} catch (Exception $exc) {
  echo $exc->getMessage();
}


?>
