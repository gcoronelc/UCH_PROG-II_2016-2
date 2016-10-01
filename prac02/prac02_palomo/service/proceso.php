<?php
$tipo_credito_seleccionado = $_POST['cbo_tipo_credito'];
$tiempo_seleccionado = $_POST['cbo_tiempo'];
$monto_ingresado = $_POST['monto'];
$mensaje = array();

if($tipo_credito_seleccionado == '')
	array_push($mensaje, 'SELECCIONE EL TIPO DE CREDITO');

if($tiempo_seleccionado == '')
	array_push($mensaje, 'SELECCIONE EL TIEMPO EN MESES');

if($monto_ingresado == '')
	array_push($mensaje, 'INGRESE EL MONTO DEL PRESTAMO');
elseif(!is_numeric($monto_ingresado))
	array_push($mensaje, 'INGRESE UN MONTO VALIDO PARA EL PRESTAMO');

if(count($mensaje) == 0)
	$proceso_ok = true;

include '../view/home.php';
?>
