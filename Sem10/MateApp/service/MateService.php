<?php

class MateService {
  
  public function procesar(MateModel $model) {
    // Proceso
    $mcd = $this->calcMcd($model->getNum1(),$model->getNum2());
    $mcm = $this->calcMcm($model->getNum1(),$model->getNum2());
    // Reporte
    $model->setMcd($mcd);
    $model->setMcm($mcm);
  }
  
  public function calcMcd($n1, $n2) {
    while($n1 <> $n2) {
      if($n1 > $n2){
        $n1 = $n1 - $n2;
      } else {
        $n2 = $n2 - $n1;
      }
    }
    return $n1;
  }
  
  public function calcMcm($n1, $n2) {
    $mcd = $this->calcMcd($n1, $n2);
    $mcm = $n1 * $n2 / $mcd;
    return $mcm;
  }
   
}

?>