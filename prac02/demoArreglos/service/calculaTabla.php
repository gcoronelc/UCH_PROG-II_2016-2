<?php

// Dato
$tabla = $_POST["tabla"];


// Proceso
$arregloTotal = array();
for($i = 1; $i <= 12; $i++){
  if($i == 5){
    continue;
  }
  $resultado = $i * $tabla;
  $item["col1"] = $i;
  $item["col2"] = "*";
  $item["col3"] = $tabla;
  $item["col4"] = "=";
  $item["col5"] = $resultado;
  $arregloTotal[] = $item;
}

// Mostrar resultado
include '../view/main.php';
