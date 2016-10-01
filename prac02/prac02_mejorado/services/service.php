<?php 
/*
integrantes del grupo:
	Galarreta Palacios, Manuel
  	Trinidad Quiñones, Oscar
  	Zapata Paulini, Joselyn
  	Condori Chipana, Marco

*/

// Datos
$tipo= $_GET["tipo"];
$meses = $_POST["meses"];
$importe = $_POST["importe"];

// Proceso
$porcInteres = 0.018;
if ($tipo =="personal") {
	$porcInteres =0.04;
}

$capitalMes = $importe / $meses;
$arregloTotal = array();
$final = $importe;
for ($cuota=1 ; $cuota <= $meses ; $cuota++) {
	$interes = $final * $porcInteres;
  $total = $capitalMes + $interes;
  $item["cuota"] = $cuota;
  $item["capital"] = $capitalMes;
  $item["interes"] = $interes;
  $item["total"] = $total;
  $arregloTotal[] = $item;
	$final = $final - $capitalMes;
}

print_r($total);

?>