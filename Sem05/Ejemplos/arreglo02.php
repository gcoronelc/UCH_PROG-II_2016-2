<?php

$datos[0] = 20;
$datos[10] = 30;
$datos[50] = 40;
$datos[80] = 50;
$datos[] = 60;

echo "Cantidad de elemento: " . count($datos) . "<br/>";

/*
for ($i = 0; $i < count($datos); $i++) {
  echo "Elemento $i: $datos[$i]<br/>";
}
*/

foreach ($datos as $value) {
  echo "Elemento: $value<br/>";
}

?>
