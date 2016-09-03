<?php

// Datos

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

// Proceso

$a = $num1;
$b = $num2;

while($a != $b){
  if($a > $b){
    $a -= $b;
  } else {
    $b -= $a;
  }
}

$mcd = $a;
$mcm = $num1 * $num2 / $mcd;

// Mostrar resultado

include("../view/proy02.php");

?>