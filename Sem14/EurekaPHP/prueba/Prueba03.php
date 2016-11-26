<?php

include '../db/AccesoDB.php';
include '../service/CuentaService.php';

try { 
  // Construyendo el Registro 
  $rec["cliente"] = '00013'; 
  $rec["empl"] = '0008'; 
  $rec["importe"] = 1000.00; 
  $rec["clave"] = '123456'; 
  $rec["moneda"] = '02'; 
  // Creando la Cuenta 
  $service = new CuentaService();
  $cuenta = $service->crearCuenta($rec); 
  // Mostrando mensaje 
  echo "Proceso ok.<br/>"; 
  echo "Cuenta Creada: $cuenta"; 
} catch( PDOException $e ) { 
  echo 'Error: ' . $e->getMessage(); 
}

?>
