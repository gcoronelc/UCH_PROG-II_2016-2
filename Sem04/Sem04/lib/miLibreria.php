<?php

function fn_factorial($n) {
  $f = 1;
  for ($j = 1; $j <= $n; $j++) {
    $f *= $j;
  }
  return $f;
}

function fn_promedio($n1, $n2) {
  $pr = ( $n1 + $n2 ) / 2;
  return $pr;
}

function fn_add(&$n, $inc) {
  $n += $inc;
}

?>
