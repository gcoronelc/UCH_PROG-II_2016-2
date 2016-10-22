<?php

class MateModel {

  // Datos
  private $num1;
  private $num2;
  // Resultado
  private $mcd;
  private $mcm;

  function getNum1() {
    return $this->num1;
  }

  function getNum2() {
    return $this->num2;
  }

  function getMcd() {
    return $this->mcd;
  }

  function getMcm() {
    return $this->mcm;
  }

  function setNum1($num1) {
    $this->num1 = $num1;
  }

  function setNum2($num2) {
    $this->num2 = $num2;
  }

  function setMcd($mcd) {
    $this->mcd = $mcd;
  }

  function setMcm($mcm) {
    $this->mcm = $mcm;
  }

}

?>