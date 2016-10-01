<?php 
/*
integrantes del grupo:
	Galarreta Palacios, Manuel
  	Trinidad Quiñones, Oscar
  	Zapata Paulini, Joselyn
  	Condori Chipana, Marco

*/
$tipo= $_GET["tipo"];
$meses = $_POST["meses"];
$importe = $_POST["importe"];
$interes = 0.018;
if ($tipo =="personal") {
	$interes =0.04;
}

$capital = $importe / $meses;

$total = array();
$final = $importe;
for ($i=0 ; $i < $meses ; $i++) {
	$capi = $final * $interes;
	$final = $final - $capital;
	$total[$i] = $capi;
}
//print_r($total);
 ?>